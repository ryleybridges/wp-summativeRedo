<?php

function addCustomThemeFiles_Goldies(){
    wp_enqueue_style('bootstrapCSSGoldies', get_template_directory_uri() . '/assests/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSSGoldies', get_template_directory_uri() . '/assests/css/style.css', array(), '0.0.1', 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJSGoldies', get_template_directory_uri() . '/assests/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('customJSGoldies', get_template_directory_uri() . '/assests/js/script.js', array('jquery'), '0.0.1', true);
};

add_action('wp_enqueue_scripts', 'addCustomThemeFiles_Goldies');

add_theme_support('post-thumbnails', array('post'));

function addCustomMenus_Goldies(){
    add_theme_support('menus');
    register_nav_menu('top_navigation', __('The top navigation is located at the top of each page.', 'GoldiesCustom'));
};

add_action('after_setup_theme', 'addCustomMenus_Goldies');

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

?>
