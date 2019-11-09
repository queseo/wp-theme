<?php /*
Theme Name: theme-wp
Author: Queseo
Author URI: http://queseo.es/
Description: My first responsive HTML5 theme
Version: 1.0
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
                register_sidebar( array(
                                'name'          => 'Sidebar',
                                'id'            => 'sidebar',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h3>',
                                'after_title'   => '</h3>',
                ) );

                register_sidebar( array(
                                'name'          => 'Footer 1',
                                'id'            => 'footer-1',
                                'before_widget' => '<div class="footer_w1">',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>',
                ) );
                register_sidebar( array(
                                'name'          => 'Footer 2',
                                'id'            => 'footer-2',
                                'before_widget' => '<div class="footer_w2">',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>',
                ) );
                register_sidebar( array(
                                'name'          => 'Footer 3',
                                'id'            => 'footer-3',
                                'before_widget' => '<div class="footer_w3">',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>',
                ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );

// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );


if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(900, 400);

?>