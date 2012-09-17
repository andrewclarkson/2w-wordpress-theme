<?php
/*
 *
 *
 *
 */
//Get the base template url to be added on. 
$template_url = get_template_directory_uri();; 

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" itemscope itemtype="http://schema.org/LocalBusiness"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" itemscope itemtype="http://schema.org/LocalBusiness"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" itemscope itemtype="http://schema.org/LocalBusiness"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" itemscope itemtype="http://schema.org/LocalBusiness"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <!--TODO: <meta language> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title><?php
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
    <!--TODO: Make this Dynamic-->
    <meta itemprop="name" content="">
    <!--TODO: Make this Dynamic-->
    <meta itemprop="description" content="">
    
    <?php 
    //Get the featured image fallback to the main logo!
      if (has_post_thumbnail( $post->ID )) {
        $image = wp_get_attachment_image_src( 
          get_post_thumbnail_id( $post->ID ),
          'single-post-thumbnail' 
        );
      } else {
        $image = $template_url . '/img/logo.png';
      }
    ?>
    <meta itemprop="image" content="<?=$image;?>/css/style.css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <link href="<?=$template_url;?>/css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?=$template_url;?>/js/libs/modernizr.js"></script>
    <?php
      wp_head();
    ?>
  </head>

  <body>
    <div class="container">
    <div id="static_wrapper">
      <header>
        <div class="row-fluid">
        <div class="span8">
          <div class="logo">
            <a href="<? bloginfo('url') ?>"><img src="<?=$template_url?>/img/2nd-Wind-Logo-Low-Res.jpg" alt="2nd Wind Exercise"/></a>
          </div>
          <div class="slogan">
            <h4>Why Buy New, When Slightly Used Will Do?</h4>
            <h3>Except When the Deals Are This Good!</h3> 
          </div>
          <div class="social">
            <ul>
              <li class="facebook">
                <a href="">
                  <strong>Facebook</strong>
                </a>
              </li>
              <li class="google-plus">
                <a href="">
                  <strong>Google+</strong>
                </a>
              </li>
              <li class="linkedin">
                <a href="">
                  <strong>LinkedIn</strong>
                </a>
              </li>
              <li class="twitter">
                <a href="">
                  <strong>Twitter</strong>
                </a>
              </li>
              <li class="pinterest">
                <a href="">
                  <strong>Pinterest</strong>
                </a>
              </li>
             </ul>
           </div> 
        </div>
        <div class="span4">
          <button href="#" class="btn btn-primary pull-right locator">Find a Local Store<i class="icon-white icon-map-marker"></i></button>
          <form class="form-search input-append pull-right">
            <input type="text" class="" placeholder="Search 2nd Wind...">
            <button type="button" class="btn btn-primary"><i class="icon-white icon-search"></i></button>
          </form>          
        </div>
      </div>   

      <div id="inner-header_row2">
        <div id="access" role="navigation">
        <?php
          //TODO: nav could use more cleaning
          second_wind_menu();
          $params = array(  
            'container_class' => 'menu-header',  
            'menu' => 'mainmenu'  
          );

          wp_nav_menu($params); 
        ?>
        </div><!--/#access -->
      </div>
    </header>