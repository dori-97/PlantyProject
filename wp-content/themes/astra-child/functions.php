<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

function my_theme_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'my_theme_setup');

function my_theme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'my_theme_register_menus' );


function custom_menu_item_for_logged_in_users($items, $args) {
    
    if ($args->theme_location == 'primary-menu') {
        
        if (is_user_logged_in()&& current_user_can ('administrator')) {
            
            $new_item = '<li class="menu-item custom-admin-menu-item"><a href="' . esc_url(home_url('/admin')) . '">Admin</a></li>';      
   
        
        $menu_items = explode('</li>', $items); 
        array_splice($menu_items, 1, 0, $new_item); 

        
        $items = implode('</li>', $menu_items) . '</li>';
    }
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'custom_menu_item_for_logged_in_users', 10, 2);
