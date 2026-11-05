
<?php

function bugbusters_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'bugbusters_theme_setup');

function bugbusters_enqueue_styles() {
    wp_enqueue_style(
        'bugbusters-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'bugbusters_enqueue_styles');
