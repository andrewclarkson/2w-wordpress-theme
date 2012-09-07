<?php
/**
 * The 2nd Wind Exercise Equipment Home Page
 * 
 * Last Edited: September 7th, 2012 by Andrew Clarkson 
 * Template Name: Home Page
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="google-site-verification" content="Kk1JGSw7vWmibgx68xuvjMKDbkBw8yITiX7ecie6D1c" />
<meta name="msvalidate.01" content="3DB651CD8DB172809D78B49B48F12C88" />
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
    
<meta itemprop="name" content="Exercise - Fitness Equipment | 2nd Wind Exercise">
<meta itemprop="description" content="For nearly 20 years, it’s been our passion to offer exceptional products, incredible value and outstanding customer care. From entry-level residential fitness products to a full line of commercial gear, 2nd Wind carries the best brands available on the market today.">
<meta itemprop="image" content="http://www.2ndwindexercise.com/wp-content/themes/secondwind-updated/images/index_03.png">
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

<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/residential_header.08222012.css" rel="stylesheet" type="text/css" />

<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/index_new4.08222012.css" rel="stylesheet" type="text/css" />

<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/footer.css" rel="stylesheet" type="text/css" />

<!--<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/drop_downs.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://www.google.com/cse/api/branding.css" rel="stylesheet" type="text/css" media="screen" />-->
<script type="text/javascript" language="javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/swap.js"></script>
 <script type="text/javascript" language="javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/scripts/drop_down.js"></script>
 <link rel="shortcut icon" href="/favicon.ico" />
<base href="<?php bloginfo("home")?>"  />

<!-- Google+ -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

</head>

<body>

<div id="wrapper">
<div id="static_wrapper">
  <div id="inner-header_row1">
    <div id="header_row1-inner">
      <div class="slogan">
        <h2><em>Why Buy New, When Slightly Used Will Do?</em></h2>
        <h1><em>Except When the Deals Are This Good!</em></h1> 
      </div>
      <div class="cse-branding-form" id="search-form">
        <form action="/shop/catalogsearch/result/" id="cse-search-box">
          <input name="q" type="text" id="search_box" style="border: #FFF;" value="Search Products" size="28" onclick="this.value=''" />
          <input id="search_button" name="sa" type="image" value="Search" src="http://www.2ndwindexercise.com/wp-content/themes/secondwind-updated/images/button_01.png" />
        </form>
      </div>    
      <ul class="top-links">
        <li>
          <a href="//www.2ndwindexercise.com/commercial/">Commercial Equipment</a>
        </li>
        <li>
          <a href="//www.2ndwindexercise.com/contact">Contact Us</a>
        </li>
        <div class="fb-like" data-href="http://www.2ndwindexercise.com/" data-send="false" data-layout="button_count" data-show-faces="true" data-colorscheme="dark" data-font="lucida grande"></div>
      </ul>  
      <div id="store-form">
        <a href="/locator">
          <img src="http://www.2ndwindexercise.com/wp-content/uploads/2012/05/find-a-store.png" />
        </a>
      </div>    
      <a href="<? bloginfo("home") ?>"><img src="//2ndwindexercise.com/img/2nd-Wind-Logo-Low-Res.jpg" alt="2nd Wind Exercise" id="logo" /></a>
    </div>
  </div>


  <div id="header_row2">
         <div id="access" role="navigation">
            <?php

            second_wind_menu();

            $params = array(  
              'container_class' => 'menu-header',  
              'menu' => 'mainmenu'  
            );

            wp_nav_menu($params); 
            ?>
          </div><!--/#access -->
 <div class="cse-branding-right" style="background-color:#FFFFFF;color:#000000">

</div>
</div>


  <div id="content_area">
  <div id="body_area"><?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
				 

				 

<?php endwhile; ?>

</div>
  <div style="clear:both;"></div>
  </div>


  <div id="footer">
  <div id="footer-states" style="float:left; padding-bottom:10px">
  <h3>Proudly Serving Communities In:</h3>
     <table border="0" cellpadding="0" cellspacing="0" style="text-align:center; font-size:10px;" align="center"> 
        <tr>
          <td width="117"><a href="http://www.2ndwindexercise.com/minnesota/">Minnesota</a></td>
          <td width="114"><a href="http://www.2ndwindexercise.com/wisconsin/">Wisconsin</a></td>
          <td width="114"><a href="http://www.2ndwindexercise.com/illinois/">Illinois</a></td>
          <td width="92"><a href="http://www.2ndwindexercise.com/iowa/">Iowa</a></td>
          <td width="109"><a href="http://www.2ndwindexercise.com/missouri/">Missouri</a></td>
          <td width="106"><a href="http://www.2ndwindexercise.com/indiana/">Indiana</a></td>
          <td width="109"><a href="http://www.2ndwindexercise.com/south-dakota/">South Dakota</a></td>
          <td width="112"><a href="http://www.2ndwindexercise.com/north-dakota/">North Dakota</a></td>
          <td width="116"><a href="http://www.2ndwindexercise.com/nebraska/">Nebraska</a></td>
        </tr>
     </table> 
</div>
    
      <div  id="footer-logo"><table width="100%" border="0" cellspacing="0" cellpadding="0"> 
  <tr>
    <td width="20">&nbsp;</td> 
    <td><a href="<? bloginfo("home")?>/life-fitness" class="footer-fitnessLogo" title="Life Fitness"></a></td> 
    <td><a href="<? bloginfo("home")?>/octane-fitness" class="footer-octaneLogo" title="Octane"></a></td> 
    <td><a href="<? bloginfo("home")?>/torque" class="footer-torqueLogo" title="Torque"></a></td> 
    <td><a href="<? bloginfo("home")?>/hoist-fitness" class="footer-hoistLogo" title="Hoist"></a></td> 
    <td><a href="<? bloginfo("home")?>/lifespan" class="footer-lifespanLogo" title="LifeSpan"></a></td> 
  </tr> 
  <tr>
    <td>&nbsp;</td> 
    <td><a href="<? bloginfo("home")?>/lemond-fitness" class="footer-lemondLogo" title="leMond"></a></td> 
    <td><a href="<? bloginfo("home")?>/vision-fitness" class="footer-visionLogo" title="Vision Fitness"></a></td> 
    <td><a href="<? bloginfo("home")?>/power-plate" class="footer-powerPlateLogo" title="Power Plate"></a></td> 
    <td><a href="<? bloginfo("home")?>/cybex" class="footer-cybexLogo" title="Cybex"></a></td> 
    <td><a href="<? bloginfo("home")?>/power-block" class="footer-powerBlockLogo" title="Power Block"></a></td> 
  </tr> 
</table> 
</div> 
 
<table border="0" cellpadding="0" cellspacing="0"> 
        <tr>
          <td><a href="/">Home</a></td>
          <td><a href="/careers">Careers</a></td>
          <td><a href="/appointment">Special Services</a></td>
          <td><a href="/life-fitness">Brands We Carry</a></td>
        </tr>
        <tr>
          <td><a href="/promotions">Promotions</a></td>
          <td><a href="/shop">Shop Products</a></td>
          <td><a href="/blog">Fitness Blog</a></td>
          <td><a href="/locator">Store Locator</a></td>
        </tr>
        <tr>  
          <td><a href="/contact">Contact Us</a></td>
          <td><a href="/sitemap">Sitemap</a></td>
          <td><a href="http://facebook.com/2ndwindexercise" target="_blank">Facebook</a></td>
          <td><a href="/commercial">Commercial</a></td>
        </tr>    
      </table> 
 
<div id="contact_info"> 
&copy; 2012 <a href="http://www.2ndwindexercise.com/">2nd Wind Exercise Equipment</a> <br /> 
7585 Equitable Dr  |  Eden Prairie, Minnesota 55344<br /> 
952.544.5249
<p><a href="http://www.savvyproweb.com" target="_blank">Web Design &amp; Development</a> by Savvy Pro Web</p>
 
</div> 
  </div>
</div></div>
<!-- <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-20056-1");
pageTracker._trackPageview();
} catch(err) {}</script>-->



 
<?php get_footer(); ?>
