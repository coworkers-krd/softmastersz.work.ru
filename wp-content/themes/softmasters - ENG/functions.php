<?php

function add_styles() {
    wp_enqueue_style('font-style', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900&amp;subset=cyrillic');
    wp_enqueue_style('css_style', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'add_styles' );

function add_scripts() {
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() .'/js/jquery-3.1.1.js');
    wp_enqueue_script('migrate', get_stylesheet_directory_uri() .'/js/jquery-migrate-1.4.1.min.js');
    wp_enqueue_script('jqueryui', get_stylesheet_directory_uri() .'/js/jquery-ui.js');
    wp_enqueue_script('maskedinput', get_stylesheet_directory_uri() .'/js/jquery.maskedinput.min.js');
    wp_enqueue_script('touch', get_stylesheet_directory_uri() .'/js/jquery.ui.touch-punch.min.js');
    wp_enqueue_script('script', get_stylesheet_directory_uri() .'/js/script.js');
}
add_action('wp_enqueue_scripts', 'add_scripts');


add_theme_support( 'post-thumbnails' ); // включаем миниатюры для всех типов постов

/*
 * Включаем поддержку меню
 */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

register_nav_menus(
    array(
        'head_menu' => 'Меню в Шапке',
    )
);

/*
 * Включаем поддержку кастомных полей
 */
function true_custom_fields() {
    add_post_type_support( 'post', 'custom-fields'); // в качестве первого параметра укажите название типа поста
}
add_action('init', 'true_custom_fields');

/*
 * Страничка Общих настроек в Админке
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

        array(

            // section ID isn't used anywhere, but it is required
            'id' => 'promo',

            // section name is displayed as h2 heading
            'name' => 'Текст для промо',

            // and only now the array of fields
            'fields' => array(
                array(
                    'id'			=> 'promo-label',
                    'label'			=> 'Заголовок',
                    'type'			=> 'text', // table of types is above
                    'placeholder' 	=> 'Заголовок для промо'
                ),
                array(
                    'id'			=> 'promo-text',
                    'label'			=> 'Текст ниже заголовка',
                    'type'			=> 'textarea', // table of types is above
                    'placeholder' 	=> 'Текст под заголовком'
                ),
                array(
                    'id'			=> 'promo-video1',
                    'label'			=> 'Видео .webm',
                    'type'			=> 'text', // table of types is above
                    'description' => 'Название первого видео-файла для фона',
                ),
                array(
                    'id'			=> 'promo-video2',
                    'label'			=> 'Видео .mp4',
                    'type'			=> 'text', // table of types is above
                    'description' => 'Директория хранения файлов <code>img/video</code> в папке темы',
                ),
            )
        ),


    )
);
if( class_exists( 'trueOptionspage' ) )
    new trueOptionspage( $main_options );


/*
 * Домполнительные поля для мета-тегов
 */
$metabox = array(

    // ID of the metabox and custom field name prefix
    'id' =>	'meta',

    // Only users with this capability can see the metabox
    'capability' => 'edit_posts',

    // metabox title
    'name' => 'Мета данные страницы',

    // custom post types names, you can use array( 'page', 'post', 'your_type' )
    'post_type' => array('page','products'),

    // metabox position: low | high | default
    'priority' => 'high',

    // array of all metabox input field and their params
    'args' => array(

        /* simple text input */
        array(
            'id'	=> 'title',
            'label' => 'Title',
            'description' => 'Title который будет отображаться для страницы',
            'type'	=> 'text',
        ),

        /* simple text input */
        array(
            'id'	=> 'key',
            'label' => 'Keywords',
            'type'	=> 'text',
        ),

        /* simple text input */
        array(
            'id'	=> 'desc',
            'label' => 'Description',
            'type'	=> 'textarea',
        ),

    )

);

new trueMetaBox( $metabox );



/*
 * Добавляем тип поста для партнеров
 */
add_action( 'init', 'partners' ); // Использовать функцию только внутри хука init

function partners() {
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнера',
        'add_new' => 'Добавить партнера',
        'add_new_item' => 'Добавить нового партнера',
        'edit_item' => 'Редактировать партнера',
        'new_item' => 'Новый партнер',
        'all_items' => 'Все партнеры',
        'view_item' => 'Просмотр партенров на сайте',
        'search_items' => 'Искать пертнеров',
        'not_found' => 'партнеров не найдено',
        'not_found_in_trash' => 'В корзине нет партнеров.',
        'menu_name' => 'Партнеры'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type( 'partners', $args);
}

/*
 * Добавляем тип поста для истории компании
 */
add_action( 'init', 'history' ); // Использовать функцию только внутри хука init

function history() {
    $labels = array(
        'name' => 'История Компании',
        'singular_name' => 'Историю',
        'add_new' => 'Добавить историю',
        'add_new_item' => 'Добавить новую историю',
        'edit_item' => 'Редактировать историю',
        'new_item' => 'Новая история',
        'all_items' => 'Все истории',
        'view_item' => 'Просмотр иторий на сайте',
        'search_items' => 'Искать истории',
        'not_found' => 'истории не найдены',
        'not_found_in_trash' => 'В корзине нет историй.',
        'menu_name' => 'История'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-clock',
        'menu_position' => 5,
        'has_archive' => true,
        'taxonomies' => array(
            'years',
        ),
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type( 'history', $args);
}
/*
 * Добавляем таксономию годов для истории компании
 */
function add_new_taxonomies() {
    register_taxonomy('years',
        array('history'),
        array(
            'hierarchical' => false,
            'labels' => array(
                'name' => 'Год',
                'singular_name' => 'Год',
                'search_items' =>  'Найти год',
                'popular_items' => 'Популярные года',
                'all_items' => 'Все года',
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_item' => 'Редактировать год',
                'update_item' => 'Обновить год',
                'add_new_item' => 'Добавить новый год',
                'new_item_name' => 'Ныовый год',
                'add_or_remove_items' => 'Добавить или удалить год',
                'menu_name' => 'Года для истории'
            ),
            'public' => true,
            'show_in_nav_menus' => true,
            'show_ui' => true,
            'show_tagcloud' => true,
            'update_count_callback' => '_update_post_term_count',
            'capabilities'          => array(
                'manage_terms',
                'edit_terms',
                'delete_terms',
                'assign_terms',
            ),
            'meta_box_cb'           => 'post_tags_meta_box', // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
            'show_admin_column'     => true,
        )
    );
}
add_action( 'init', 'add_new_taxonomies', 0 );


/*
 * Добавляем тип поста для партнеров
 */
add_action( 'init', 'products' ); // Использовать функцию только внутри хука init

function products() {
    $labels = array(
        'name' => 'Продукты',
        'singular_name' => 'Продукт',
        'add_new' => 'Добавить продукт',
        'add_new_item' => 'Добавить новый продукт',
        'edit_item' => 'Редактировать продкут',
        'new_item' => 'Новый продукт',
        'all_items' => 'Все продукты',
        'view_item' => 'Просмотр продуктов на сайте',
        'search_items' => 'Искать продукты',
        'not_found' => 'продукты не найдены',
        'not_found_in_trash' => 'В корзине нет ппродуктов.',
        'menu_name' => 'Наши Продукты'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-products',
        'menu_position' => 5,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type( 'products', $args);
}

// Change the menu item labels
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Новости';
    $submenu['edit.php'][5][0] = 'Новости';
    $submenu['edit.php'][10][0] = 'Добавить Новость';
    $submenu['edit.php'][15][0] = 'Категории'; // Change name for categories
    $submenu['edit.php'][16][0] = 'Метки'; // Change name for tags
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );

// Change the post object labels
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Новости';
    $labels->singular_name = 'Новость';
    $labels->add_new = 'Добавить Новость';
    $labels->add_new_item = 'Добавть Новость';
    $labels->edit_item = 'Редактировать Новость';
    $labels->new_item = 'Новость';
    $labels->view_item = 'Посмотреть Новости';
    $labels->search_items = 'Искать новости';
    $labels->not_found = 'Новостей не найдено';
    $labels->not_found_in_trash = 'Нет Новостей в корзине';

    $wp_post_types['post']->menu_icon = 'dashicons-megaphone';
}
add_action( 'init', 'change_post_object_label' );


