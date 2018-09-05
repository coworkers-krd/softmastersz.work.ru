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


add_theme_support( 'post-thumbnails' ); // включаем миниатюры для всех типов постов


/*
 * Страничка настроек в Админке
 */
$main_options = array(
    // yes, slug is the part of the option name, so, to get the value, use
    // get_option( '{SLUG}_{ID}' );
    // get_option( 'styles_headercolor' );
    'slug'	=>	'main',

    // h2 title on your settings page
    'title' => 'Общие ',

    // this displayed in admin menu, try to make it short
    'menuname' => 'Общие настройки',

    'capability'=>	'manage_options',

    // WordPress option pages consist of sections, so,
    // at first we create an array of sections and add fields in each section
    'sections' => array(

        // first section
        array(

            // section ID isn't used anywhere, but it is required
            'id' => 'contacts',

            // section name is displayed as h2 heading
            'name' => 'Контакты',

            // and only now the array of fields
            'fields' => array(
                array(
                    'id'			=> 'tel',
                    'label'			=> 'Телефон',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> 'Номер телефона'
                ),
                array(
                    'id'			=> 'mail',
                    'label'			=> 'Email',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> 'example@email.ru'
                ),
                array(
                    'id'			=> 'fiz',
                    'label'			=> 'Физический адрес',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> ''
                ),
                array(
                    'id'			=> 'yr',
                    'label'			=> 'Юридический адрес',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> ''
                ),
                array(
                    'id'			=> 'post',
                    'label'			=> 'Почтовый адрес',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> ''
                )
            )
        ),

    )
);
if( class_exists( 'trueOptionspage' ) )
    new trueOptionspage( $main_options );