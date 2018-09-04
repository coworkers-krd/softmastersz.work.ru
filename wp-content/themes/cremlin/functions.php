<?php

function styleConnect(){

    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('font-style', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=cyrillic');

    // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.1.js');
    // wp_enqueue_script('migrate', get_template_directory_uri() . '/js/jquery-migrate-1.4.1.min.js');
    // wp_enqueue_script('bundle', get_template_directory_uri() . '/js/input.mask.bundle.min.js');
    // wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js');
    // wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');

}
add_action( 'wp_enqueue_scripts', 'styleConnect' );


//включение меню
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

//Включение миниатюр для постов
add_theme_support( 'post-thumbnails' ); // для всех типов постов

//Длинна в словах предпоказа поста
function new_excerpt_length($length = 40) {
    return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

//Включение форматов постов
add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'chat', 'audio') );

// Слайдер для фото-галереи
function gallery_slider($output, $attr) {
    $ids = explode(',', $attr['ids']);
    $images = get_posts(array(
        'include' => $ids,
        'post_status' => 'inherit',
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'post__in',
    ));
    if ($images) {
        $output = gallery_slider_template($images);
        return $output;
    }
}
add_filter('post_gallery', 'gallery_slider', 10, 2);

function gallery_slider_template($images) {
    ob_start();
    include 'gallery-slider.php';
    $output = ob_get_clean();
    return $output;
}

/*
 * Страничка настроек в Админке
 */
$main_options = array(
    // yes, slug is the part of the option name, so, to get the value, use
    // get_option( '{SLUG}_{ID}' );
    // get_option( 'styles_headercolor' );
    'slug'	=>	'main',

    // h2 title on your settings page
    'title' => 'Ссылки в Шапке',

    // this displayed in admin menu, try to make it short
    'menuname' => 'Общие настройки',

    'capability'=>	'manage_options',

    // WordPress option pages consist of sections, so,
    // at first we create an array of sections and add fields in each section
    'sections' => array(

        // first section
        array(

            // section ID isn't used anywhere, but it is required
            'id' => 'index',

            // section name is displayed as h2 heading
            'name' => 'SEO Главной страницы',

            // and only now the array of fields
            'fields' => array(
                array(
                    'id'			=> 'vk',
                    'label'			=> 'Ссылка вконтакте',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> 'Ссылка на ВК'
                ),
                array(
                    'id'			=> 'mail',
                    'label'			=> 'Email',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> 'Mail'
                ),
                array(
                    'id'			=> 'facebook',
                    'label'			=> 'Ссылка на facebook',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> 'Facebook'
                ),
                array(
                    'id'			=> 'rss',
                    'label'			=> 'Ссылка на rss ленту',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> 'RSS'
                )
            )
        ),

    )
);
if( class_exists( 'trueOptionspage' ) )
    new trueOptionspage( $main_options );

/**
 * Возвращает дочерние элементы пункта меню
 *
 * @param целое ID родительского элемента
 * @param массив Массив объектов элементов меню, по которым будет проходить отбор
 * @param логическое Нужно ли учитывать дочерние элементы всех уровней вложенности
 * @return массив Массив объектов дочерних элементов
 */
function get_nav_menu_children_items( $parent_id, $nav_menu_items, $dpth = true ) {
    $dochernie[] = '';
    foreach ( $nav_menu_items as $nav_item ) {
        if ( $nav_item->menu_item_parent == $parent_id ) {
            $dochernie[] = $nav_item;

        }
    }
return $dochernie;
}