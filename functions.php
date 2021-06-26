<?php 


if ( ! function_exists( 'auroratheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function auroratheme_setup() {
    
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'auroratheme', get_template_directory() . '/languages' );
    
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
    
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
    
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'auroratheme' ),
        'secondary' => __('Secondary Menu', 'auroratheme' )
    ) );
    
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'auroratheme_setup' );

/**
 * Register styles
 */
function auroratheme_register_styles() {

    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version );
    wp_enqueue_style( 'libraries', get_template_directory_uri() . '/assets/css/libraries.css', array(), $theme_version );

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array ( ), $theme_version);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array ( ), $theme_version);


}

add_action( 'wp_enqueue_scripts', 'auroratheme_register_styles' );