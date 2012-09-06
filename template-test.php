<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Test
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

  ?>
 
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<!--Google Sitemap Verification-->
	<meta name="verify-v1" content="hbtd4Vs9FYCRMY/fpyKTHOB24SY/NhlUqMt6hMbeCRA=" />
<!--Yahoo Sitemap Verification-->
	<meta name="y_key" content="e872f50b8e3f71b4" />
<!--Bing Sitemap Verification-->    
    <meta name="msvalidate.01" content="B93FF458ABC22DA01DEF25DACB112150" />

<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/residential_header.css" rel="stylesheet" type="text/css" />
<? if(is_front_page())
{
	?>
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/index_new4.css" rel="stylesheet" type="text/css" />
<?
}
else
{
?>
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/inner-pages.css" rel="stylesheet" type="text/css" />

<?

}

?>

<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/footer.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/sIFR-screen.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/sIFR-print.css" rel="stylesheet" type="text/css" media="print" />
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/drop_down2.css" rel="stylesheet" type="text/css" media="screen" />
<!--<link href="http://www.google.com/cse/api/branding.css" rel="stylesheet" type="text/css" media="screen" />-->
<script type="text/javascript" language="javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/swap.js"></script>
<script type="text/javascript" language="javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/sifr.js"></script>
<script type="text/javascript" language="javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/drop_down.js"></script>
<script type="text/javascript" language="javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/swfobject.js"></script>
<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/Templates/favicon.ico" />



</head>

<body>

<?

if(is_front_page())
{
}
else
{
	?>
    
<div id="wrapper">
<div id="static_wrapper">
  <div id="inner-header_row1"><div id="header_row1-inner">
       <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2F2ndwindexercise&amp;layout=button_count&amp;show_faces=true&amp;width=20&amp;action=like&amp;colorscheme=light&amp;height=15" scrolling="no" frameborder="0" style="margin-left:360px; margin-top:9px; border:none; overflow:hidden; width:95px; height:25px;" allowTransparency="true"></iframe>
<div class="cse-branding-form" id="search-form">
    <form action="http://www.2ndwindexercise.com/search.htm" id="cse-search-box">
        <input type="hidden" name="cx" value="012077268237947716655:pbsni9r3n7w" />
        <input type="hidden" name="cof" value="FORID:11" />
        <input type="hidden" name="ie" value="UTF-8" />
        <input name="q" type="text" id="search_box" style="border: #FFF;" value="Search" size="28" onclick="this.value=''" />
   		<input id="search_button" name="sa" type="image" value="Search" src="<? bloginfo("stylesheet_directory") ?>/images/button_01.png" />
    </form>
  </div>    

     <ul>
          <li><a href="/contact_us.html">Contact Us</a></li>
            <li><a href="/blog/">Fitness Blog</a></li>
		    <li class="last-tab"><a href="/commercial/index.htm">Commercial Equipment</a></li>
</ul>  

<div id="store-form">
    <form action="#" >
      <label for="textfield">Store Locator</label>
        <input name="textfield" type="text" id="store_box" value="Enter Zip Code" onclick="this.value=''" />
        <input type="image" name="imageField" id="store_button" src="<? bloginfo("stylesheet_directory") ?>/images/button_01.png" />
    </form>
  </div>    

<a href="/shop/checkout/cart/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('cart','','<? bloginfo("stylesheet_directory") ?>/images/new-index_over_09.png',0)"><img src="<? bloginfo("stylesheet_directory") ?>/images/new-index_09.png" alt="View Cart" name="cart" border="0" id="cart" /></a>
    <a href="<? bloginfo("home")?>"><img src="<? bloginfo("stylesheet_directory") ?>/images/index_03.png" alt="2nd Wind Exercise" id="logo" /></a> </div></div>

  <div id="inner-header_row2">
               
			   
               	<div id="access" role="navigation">
			 
				 
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', "menu" => "mainmenu" ) ); ?>
			</div><!-- #access -->
 


</div>


  <div id="content_area">

<!-------------- Body Area Started -------------->
  <div id="body_area">
    <div id="inner-body_area">


<!-------------- Left Column Started -------------->
   	    <div id="main-leftCol">
        
         	<div id="content-leftCol">

        	<div id="service1">

            <div class="sec1">
            
            
        <?
}
?>
        
         

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

		 

	      
            <? if(is_front_page())
			{
			}
			else
			{
				?>
                 
                  </div>
        	</div>
        	</div>
                    
   	    </div>
<!-------------- Left Column end -------------->        

<!-------------- Right Column Started -------------->
   	    <div id="main-rightCol">
   	      <div id="sidebar">
   	         
              <? dynamic_sidebar("inner-sidebar-widget") ?>
 	        </div>
   	    </div>
<!-------------- Right Column end -------------->        
    
    </div></div>
<!-------------- Body Area end -------------->
 
  </div>

 <div style="clear:both;"></div>

  <div id="footer">
    
               <? include( TEMPLATEPATH . "/includes/footer.php") ?>
       </div>
				<?
				
			}
			
			?>
            
