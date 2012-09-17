<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Sweepstakes Template
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
 
 <!-------------- Left Column Started -------------->
   	    <div id="main-leftCol">
        
         	<div id="content-leftCol">

 	<div id="service1">

            <div class="sec1">
		 

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			 
					<?php if ( is_front_page() ) { ?>
						 
					<?php } else { ?>
						<!--<h1 class="entry-title"><?php the_title(); ?></h1>-->
					<?php } ?>

					 
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						

<?php endwhile; ?>

		 </div>
        	</div>

                  
        	</div>
                    
   	    </div>
<!-------------- Left Column end -------------->        


<!-------------- Right Column Started -------------->
   	    <div id="main-rightCol">
   	      <div id="sidebar">
   	         
              <? dynamic_sidebar("sweekpstakes-sidebar-widget") ?>
 	        </div>
   	    </div>
<!-------------- Right Column end -------------->       


<?php get_footer(); ?>
