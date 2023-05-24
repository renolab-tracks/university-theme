<?php


// define('SITE_URL', bloginfo('url'));
define('THEME_DIR', get_template_directory_uri());
require 'inc/posttypes.php';



add_action('wp_enqueue_scripts', 'university_scripts');


function university_scripts()
{

    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css',
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'styles-css',
        THEME_DIR . '/style.css',
        array('bootstrap-css'),
        wp_get_theme()->get('Version')
    );


    wp_enqueue_script(
        'site-js',
        get_template_directory_uri() . '/assets/js/site.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );


    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('after_setup_theme', 'theme_supports');

function theme_supports()
{
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}


add_filter('the_content', 'filter_the_content_in_the_main_loop', 1);

function filter_the_content_in_the_main_loop($content)
{

    return $content.'asadasd';
}

function getString()
{

    return 'getString';
}





function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );