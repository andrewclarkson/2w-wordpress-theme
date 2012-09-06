<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * template Name: Home
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

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
