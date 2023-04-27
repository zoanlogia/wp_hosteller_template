<?php

// add classes to menu
function add_classes_on_li($classes) {
    $classes[] = 'header_nav-list_item';
    return $classes;
};
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

function add_classes_on_a($classes) {
    $classes[] = 'nav-item';
    return $classes;
};

add_filter('nav_menu_css_class','add_classes_on_a',1,3);


// add dynamic title tag support
function hosteller_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
};

add_action('after_setup_theme', 'hosteller_theme_support');

// add_menus
function add_menus(){
    $location = array(
        'primary' => "Desktop Primary right Sidebar",
        'footer' => "Footer Menu Items",
    );
    register_nav_menus($location);
}

add_action('init', 'add_menus');

// add stylesheets
function add_css(){

    wp_register_style( 'preload', get_template_directory_uri() . '/assets/css/preload.css', false, '', 'all');
    wp_enqueue_style('preload');

    wp_register_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css', false, '', 'all');
    wp_enqueue_style('icomoon');

    wp_register_style( 'libs', get_template_directory_uri() . '/assets/css/libs.css', false, '', 'all');
    wp_enqueue_style('libs');
   
    wp_register_style( 'index', get_template_directory_uri() . '/assets/css/index.css', false, '', 'all');
    wp_enqueue_style('index');
};

add_action('wp_enqueue_scripts', 'add_css');


// add scripts
function add_script(){

    wp_register_script( 'widgetApi', 'https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js' , array(), '', false );
    wp_enqueue_script('widgetApi');
    
    wp_register_script( 'youtubePlayer', 'https://www.youtube.com/player_api' , array(), 1.1, false );
    wp_enqueue_script('youtubePlayer');

    wp_register_script( 'commonjs' , get_template_directory_uri() . '/assets/js/common.min.js' , array(), 1.1, true);
    wp_enqueue_script('commonjs');
    
    wp_register_script( 'index', get_template_directory_uri() . '/assets/js/index.min.js' , array(), 1.1, true);
    wp_enqueue_script('index');

    wp_register_script( 'gallery', get_template_directory_uri() . '/assets/js/gallery.min.js' , array(), 1.1, true);
    wp_enqueue_script('gallery');
};

add_action('wp_enqueue_scripts', 'add_script');

?>