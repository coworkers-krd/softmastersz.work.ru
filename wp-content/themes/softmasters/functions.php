<?php

function add_styles() {
    wp_enqueue_style('font-style', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&amp;subset=cyrillic');
    wp_enqueue_style('css_style', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'add_styles' );

function add_scripts() {
    wp_enqueue_script('js', get_stylesheet_directory_uri() .'/js/script.min.js');
}
add_action('wp_enqueue_scripts', 'add_scripts');