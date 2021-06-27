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
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), $theme_version );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), $theme_version );

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), false, true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), false, true);

}

add_action( 'wp_enqueue_scripts', 'auroratheme_register_styles' );

/* Custom Post Type for Services */

function create_service_postype() {

    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'post-formats',
    );

    $labels = array(
        'name' => __('Services', 'plural'),
        'singular_name' => __('Service', 'singular'),
        'menu_name' => __('Services', 'admin_menu'),
        'name_admin_bar' => __('Services', 'admin_bar'),
        'add_new' => __('Add New', 'add new'),
        'add_new_item' => __('Add New Service'),
        'new_item' => __('New Service'),
        'edit_item' => __('Edit Service'),
        'view_item' => __('View Service'),
        'all_items' => __('All Services'),
        'search_items' => __('Search Services'),
        'not_found' => __('No Service Found')
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'hierarchical' => false,
    );

    register_post_type( 'services', $args);
}
// Hooking up our function to theme setup
add_action('init', 'create_service_postype');

/* Custom Post Type for Service End */