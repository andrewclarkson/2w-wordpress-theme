<?php
/**
 * Template Name: Special Services
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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
    ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="For over 20 years, it’s been our passion to offer exceptional products, incredible value and outstanding customer care. From entry-level residential fitness products to a full line of commercial gear, 2nd Wind carries the best brands available on the market today." />
    <!--Site Verifications-->
    <meta name="google-site-verification" content="Kk1JGSw7vWmibgx68xuvjMKDbkBw8yITiX7ecie6D1c" />
    <meta name="msvalidate.01" content="3DB651CD8DB172809D78B49B48F12C88" />
    <meta property="fb:app_id" content="112904525490089"/>
    <!--Scripts-->
    
    <!--Styles-->
    <link href="http://www.2ndwindexercise.com/wp-content/themes/secondwind-updated/styles/residential_header.08172012.css" rel="stylesheet" type="text/css" />
    <link href="http://www.2ndwindexercise.com/wp-content/themes/secondwind-updated/styles/inner-pages.css" rel="stylesheet" type="text/css" />
    <link href="//www.2ndwindexercise.com/wp-content/themes/secondwind-updated/styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="http://www.2ndwindexercise.com/wp-content/themes/secondwind-updated/styles/special-services.08222012.css" rel="stylesheet" />

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
      <a href="//www.2ndwindexercise.com">
        <img src="http://2ndwindexercise.com/img/2nd-Wind-Logo-Low-Res.jpg" alt="2nd Wind Exercise" id="logo" />
      </a> 
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
        </div><!--/#header_row2-->
        <!--Post Content-->
        <div id="content_area" class="services">
          <div id="body_area">
          <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
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
    <td><a href="http://www.2ndwindexercise.com/life-fitness" class="footer-fitnessLogo" title="Life Fitness"></a></td> 
    <td><a href="http://www.2ndwindexercise.com/octane-fitness" class="footer-octaneLogo" title="Octane"></a></td> 
    <td><a href="http://www.2ndwindexercise.com/torque" class="footer-torqueLogo" title="Torque"></a></td> 
    <td><a href="http://www.2ndwindexercise.com/hoist-fitness" class="footer-hoistLogo" title="Hoist"></a></td> 
    <td><a href="http://www.2ndwindexercise.com/lifespan" class="footer-lifespanLogo" title="LifeSpan"></a></td> 
  </tr> 
  <tr>
    <td>&nbsp;</td> 
    <td><a href="http://www.2ndwindexercise.com/lemond-fitness" class="footer-lemondLogo" title="leMond"></a></td> 
    <td><a href="http://www.2ndwindexercise.com/vision-fitness" class="footer-visionLogo" title="Vision Fitness"></a></td> 
    <td><a href="http://www.2ndwindexercise.com/power-plate" class="footer-powerPlateLogo" title="Power Plate"></a></td> 
    <td><a href="http://www.2ndwindexercise.com/cybex" class="footer-cybexLogo" title="Cybex"></a></td> 
    <td><a href="http://www.2ndwindexercise.com/power-block" class="footer-powerBlockLogo" title="Power Block"></a></td> 
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
</div>
</div>                 
  <!--Google Analytics--> 
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20056-1']);
  _gaq.push(['_trackPageview']);
  (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();
  </script>
  <!--Facebook-->
  <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
  <!-- Google+-->
  <script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>

  </body>
</html>

