<?php
/**
 * Template Name: Locator Template
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				 

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?

if(isset($_POST[location_search_zip]))
{
?>
<!--<input  type="button"  onclick="hello(); return false;" value="click me"  />-->

<script>
jQuery(document).ready(function() {
hello();
});
function hello()
{
//jQuery("#store_box").val("<?php print $_POST[location_search_zip]?>");
jQuery("#location_search_zip_field").val("<?php print $_POST[location_search_zip]?>");
searchLocations();
//jQuery("#location_search_form").submit();
}

</script>
<?
}
?>
<style>
#results
{
float:right;
}
#static_wrapper #inner-header_row1 #store-form #location_search_zip_field1 {
	position:absolute;
	top:72px;
	right:130px;
	margin:0;
	padding:0px 4px;
	border:none;
	background:#FFF;
	width:96px;
	height:18px;
	font:bold 13px Helvetica, "Trebuchet MS", Arial, sans-serif;
	color:#BFBFBF;
	-webkit-border-radius:6px;
	-khtml-border-radius:6px;
	-moz-border-radius:6px;
}

</style>
<?php get_footer(); ?>
