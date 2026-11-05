<?php
/**
 * BugBusters Custom – theme functions
 */

function bugbusters_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('style', 'script', 'search-form', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'bugbusters_theme_setup');

function bugbusters_enqueue_assets() {
    // Font (falls back to the system font if it can't load)
    wp_enqueue_style(
        'bugbusters-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'bugbusters-style',
        get_stylesheet_uri(),
        array('bugbusters-fonts'),
        wp_get_theme()->get('Version')
    );

    // Mobile menu + active link highlight
    wp_enqueue_script(
        'bugbusters-main',
        get_theme_file_uri('/js/main.js'),
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'bugbusters_enqueue_assets');