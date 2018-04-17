<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	$version = '2.0.0';
  wp_enqueue_style( 'tingle', get_stylesheet_directory_uri() . '/css/tingle.min.css', array(), $version, 'all' );
  wp_enqueue_style( 'child', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $version, 'all' );
  wp_enqueue_style( 'fullpage-styles', get_stylesheet_directory_uri() . '/css/jquery.fullpage.min.css', array(), $version, 'all' );
  wp_enqueue_style( 'nanoscroller', get_stylesheet_directory_uri() . '/css/nanoscroller.css', array(), $version, 'all' );
  wp_enqueue_style( 'theme', get_stylesheet_directory_uri() . '/css/theme.css', array(), $version, 'all' );
 	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/css/slick.css', array(), $version, 'all' );  
  wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), $version, 'all' );  
  wp_enqueue_style( 'version2', get_stylesheet_directory_uri() . '/css/version2.css', array(), $version, 'all' );

  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'overflow', get_stylesheet_directory_uri() . '/js/scrolloverflow.min.js', array(), false, true );
    wp_enqueue_script( 'scrollto', get_stylesheet_directory_uri() . '/js/jquery.scrollTo.js', array(), false, true );
    wp_enqueue_script( 'waypoints', get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true );
    wp_enqueue_script( 'waypoints-inview', get_stylesheet_directory_uri() . '/js/inview.min.js', array(), false, true );
    //wp_enqueue_script( 'fullpage-js', get_stylesheet_directory_uri() . '/js/jquery.fullpage.extensions.min.js', array(), false, true );
    wp_enqueue_script( 'nanoscroller', get_stylesheet_directory_uri() . '/js/jquery.nanoscroller.min.js', array(), false, true );
    wp_enqueue_script( 'tingle', get_stylesheet_directory_uri() . '/js/tingle.min.js', array(), false, true );
    wp_enqueue_script( 'child', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), false, true );
    wp_enqueue_script( 'theme', get_stylesheet_directory_uri() . '/js/theme.js', array(), false, true );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/js/slick.min.js', array(), false, true );
  }

}
