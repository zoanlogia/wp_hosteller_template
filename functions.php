<?php

// add dynamic title tag support
function add_title_tag(){
    add_theme_support('title-tag');
};

add_action('after_setup_theme', 'add_title_tag');

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