<?php
if ( ! function_exists( 'fumee_setup' ) ) :

function fumee_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'fumee', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'fumee' ),
        'social'  => __( 'Social Links Menu', 'fumee' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // fumee_setup

add_action( 'after_setup_theme', 'fumee_setup' );


if ( ! function_exists( 'fumee_init' ) ) :

function fumee_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // fumee_setup

add_action( 'init', 'fumee_init' );


if ( ! function_exists( 'fumee_custom_image_sizes_names' ) ) :

function fumee_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'fumee_custom_image_sizes_names' );
endif;// fumee_custom_image_sizes_names



if ( ! function_exists( 'fumee_widgets_init' ) ) :

function fumee_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'fumee_widgets_init' );
endif;// fumee_widgets_init



if ( ! function_exists( 'fumee_customize_register' ) ) :

function fumee_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'fumee_customize_register' );
endif;// fumee_customize_register


if ( ! function_exists( 'fumee_enqueue_scripts' ) ) :
    function fumee_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'inline-script-1', '', [], '1.0.8', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', '/* Pinegrow Interactions, do not remove */ (function(){try{if(!document.documentElement.hasAttribute(\'data-pg-ia-disabled\')) { window.pgia_small_mq=typeof pgia_small_mq==\'string\'?pgia_small_mq:\'(max-width:767px)\';window.pgia_large_mq=typeof pgia_large_mq==\'string\'?pgia_large_mq:\'(min-width:768px)\';var style = document.createElement(\'style\');var pgcss=\'html:not(.pg-ia-no-preview) [data-pg-ia-hide=""] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show=""] {opacity:1;visibility:visible;display:block;}\';if(document.documentElement.hasAttribute(\'data-pg-id\') && document.documentElement.hasAttribute(\'data-pg-mobile\')) {pgia_small_mq=\'(min-width:0)\';pgia_large_mq=\'(min-width:99999px)\'} pgcss+=\'@media \' + pgia_small_mq + \'{ html:not(.pg-ia-no-preview) [data-pg-ia-hide="mobile"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="mobile"] {opacity:1;visibility:visible;display:block;}}\';pgcss+=\'@media \' + pgia_large_mq + \'{html:not(.pg-ia-no-preview) [data-pg-ia-hide="desktop"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="desktop"] {opacity:1;visibility:visible;display:block;}}\';style.innerHTML=pgcss;document.querySelector(\'head\').appendChild(style);}}catch(e){console&&console.log(e);}})()');

    wp_deregister_script( 'fumee-popper' );
    wp_enqueue_script( 'fumee-popper', get_template_directory_uri() . '/assets/js/popper.min.js', [], '1.0.8', true);

    wp_deregister_script( 'fumee-bootstrap' );
    wp_enqueue_script( 'fumee-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', [], '1.0.8', true);

    wp_deregister_script( 'fumee-pgia' );
    wp_enqueue_script( 'fumee-pgia', get_template_directory_uri() . '/pgia/lib/pgia.js', [], '1.0.8', true);

    wp_deregister_script( 'fumee-ks_script' );
    wp_enqueue_script( 'fumee-ks_script', get_template_directory_uri() . '/ks_script.js', [], '1.0.8', true);

    wp_deregister_script( 'fumee-salt_script' );
    wp_enqueue_script( 'fumee-salt_script', get_template_directory_uri() . '/salt_script.js', [], '1.0.8', true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'fumee-bootstrap' );
    wp_enqueue_style( 'fumee-bootstrap', get_template_directory_uri() . '/bootstrap_theme/bootstrap.css', [], '1.0.8', 'all');

    wp_deregister_style( 'fumee-blocks' );
    wp_enqueue_style( 'fumee-blocks', get_template_directory_uri() . '/blocks.css', [], '1.0.8', 'all');

    wp_deregister_style( 'fumee-style' );
    wp_enqueue_style( 'fumee-style', get_bloginfo('stylesheet_url'), [], '1.0.8', 'all');

    wp_deregister_style( 'fumee-satoshi' );
    wp_enqueue_style( 'fumee-satoshi', get_template_directory_uri() . '/satoshi.css', [], '1.0.8', 'all');

    wp_deregister_style( 'fumee-all' );
    wp_enqueue_style( 'fumee-all', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', [], '1.0.8', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'fumee_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }

    /* Pinegrow generated Include Resources End */
?>