<?php
/**
 * 2nd Wind Exercise Functions, Filters, and Hooks
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */


/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'second_wind_init' );

if ( ! function_exists( 'second_wind_init' ) ):

function second_wind_init() {

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	

}
endif;

add_action('admin_init', 'second_wind_meta_data');

function second_wind_meta_data() {

	//add_meta_box($id, $title, $callback, $screen = null, $context = 'advanced', $priority = 'default', $callback_args = null);
}


/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since Twenty Ten 1.0
 * @uses register_sidebar
 */
function twentyten_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Services Sidebar Widget', 'twentyten' ),
		'id' => 'services-sidebar-widget',
		'description' => __( 'Services Sidebar Widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
 
	register_sidebar( array(
		'name' => __( 'Career Sidebar Widget', 'twentyten' ),
		'id' => 'career-sidebar-widget',
		'description' => __( 'Career Sidebar Widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
 
	register_sidebar( array(
		'name' => __( 'Brands Sidebar Widget', 'twentyten' ),
		'id' => 'brands-sidebar-widget',
		'description' => __( 'Brands Sidebar Widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
 
	register_sidebar( array(
		'name' => __( 'Inner Sidebar Widget', 'twentyten' ),
		'id' => 'inner-sidebar-widget',
		'description' => __( 'Inner Sidebar Widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	
		register_sidebar( array(
		'name' => __( 'Blog Sidebar Widget', 'twentyten' ),
		'id' => 'blog-sidebar-widget',
		'description' => __( 'Blog Sidebar Widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
		register_sidebar( array(
		'name' => __( 'Facebook Sweepstakes Sidebar Widget', 'twentyten' ),
		'id' => 'sweekpstakes-sidebar-widget',
		'description' => __( 'Facebook Sweepstakes Sidebar Widget area', 'twentyten' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	
 
}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'twentyten_widgets_init' );

/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );

if ( ! function_exists( 'second_wind_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 *
 * @since Twenty Ten 1.0
 */
function second_wind_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'twentyten' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'twentyten_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 * @since Twenty Ten 1.0
 */
function twentyten_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;

function second_wind_has_submenu ($menu_item_id, &$items) {
        foreach ($items as $item) {
            if ($item->menu_item_parent && $item->menu_item_parent==$menu_item_id) {
                return true;
            }
        }
        return false;
    };


function second_wind_menu_filter ($items) {
    foreach ($items as &$item) {
        if (second_wind_has_submenu($item->ID, $items)) {
            $item->title = $item->title . '<span class="caret"></span>';
        }
    }

    $items_length = count($items);

    for ($i = $items_length; $i >= 0; $i--) {

        if (second_wind_has_submenu($items[$i]->ID, $items)) {
            $items[$i]->classes[] = 'last';
            break;
        }    
    }

    return $items;    
}


function second_wind_menu() {
   add_filter('wp_nav_menu_objects', 'second_wind_menu_filter');
}

