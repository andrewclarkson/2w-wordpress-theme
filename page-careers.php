<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
 
<!-------------- Single Column Started -------------->
   	    <div id="single-col">
        	

        	<div id="career">
		 

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

                  
         
                    
   	     
<!-------------- Single Column end -------------->        


 

<?php get_footer(); ?>
