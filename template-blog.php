<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Blog
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header('07-30-2012'); ?>
 <!-------------- Left Column Started -------------->
   	    <div id="main-leftCol">
        
         	<div id="content-leftCol">

  		<div id="brands">
		 

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			 
					<?php if ( is_front_page() ) { ?>
						 
					<?php } else { ?>
						<!--<h1 class="entry-title"><?php the_title(); ?></h1>-->
					<?php } ?>

					 
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					 
				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>


         	</div>

                  
        	</div>
                    
   	    </div>
<!-------------- Left Column end -------------->        


<!-------------- Right Column Started -------------->
   	    <div id="main-rightCol">
   	      <div id="sidebar">
   	         
              <? dynamic_sidebar("blog-sidebar-widget") ?>
 	        </div>
   	    </div>
<!-------------- Right Column end -------------->       


 <style>
 h2.entry-title a
 {
 font-family: Impact, Calibri, "Trebuchet MS";
font-size: 24px;
color: #AA7C2C;
 font-weight: normal;
 }
 
 </style>
<?php get_footer(); ?>
