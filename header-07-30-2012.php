<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<html itemscope itemtype="http://schema.org/LocalBusiness">
<head>

<!-- Google Website Optimizer Tracking Script -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['gwo._setAccount', 'UA-20056-17']);
  _gaq.push(['gwo._trackPageview', '/2687052570/goal']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End of Google Website Optimizer Tracking Script -->

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

<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/residential_header.07302012.css" rel="stylesheet" type="text/css" />
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
 <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/drop_down2.css" rel="stylesheet" type="text/css" media="screen" />

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

<?

if(is_front_page())
{
}
else
{
  ?>
    
    
<div id="wrapper">
<div id="static_wrapper">
  <div id="inner-header_row1">
    <div id="header_row1-inner">
      <div class="slogan">
        <h2><em>Why Buy New, When Slightly Used Could Do?</em></h2>
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
      <a href="http://www.2ndwindexercise.com">
        <img src="http://www.2ndwindexercise.com/wp-content/themes/secondwind-updated/images/index_03.png" alt="2nd Wind Exercise" id="logo" />
      </a> 
    </div>
  </div>

  <div id="inner-header_row2">
               <? include( TEMPLATEPATH . "/includes/base_product_nav.php") ?>


</div>


  <div id="content_area">

<!-------------- Body Area Started -------------->
  <div id="body_area">
    <div id="inner-body_area">



       
            
            
        <?
}
?>





        

        
       