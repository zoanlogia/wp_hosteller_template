<?php

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

// function add_type_attribute($tag, $handle, $src) {
//     // if not your script, do nothing and return original $tag
//     if ( 'index' !== $handle ) {
//         return $tag;
//     }
//     if ( 'commonjs' !== $handle ) {
//         return $tag;
//     }
//     // change the script tag by adding type="module" and return it.
//     $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
//     return $tag;
// }

// add_filter('script_loader_tag', 'make_scripts_modules' , 10, 3);




add_action('wp_enqueue_scripts', 'add_script');

?>