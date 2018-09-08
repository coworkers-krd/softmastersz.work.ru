<header class="page-header">
    <div class="container">
        <a href="/" class="page-header__logo">
            <img src=" <?=get_stylesheet_directory_uri()?>/img/logo_scroll.png" alt="">
            <img src="<?=get_stylesheet_directory_uri()?>/img/header_logo.png" alt="">
        </a>
        <nav class="main-menu">
            <div class="main-menu__wrapper">

                <ul>
                <?
                if( $menu_items = wp_get_nav_menu_items('main-menu') ) { // "Меню для шапки" - это название моего меню. Вы можете также использовать ID или ярлык
                    $menu_list = '';
                    foreach ( $menu_items as $menu_item ) {
                        $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                        $url = $menu_item->url;

                            echo '<li><a href="' . $url . '" class="main-menu__link">' . $title . '</a></li>';
                            }
                }
                ?>
                </ul>

                <!--<ul>
                    <li><a class="main-menu__link" href="/#about">О компании</a></li>
                    <li><a class="main-menu__link" href="/news/">Новости</a></li>
                    <li><a class="main-menu__link" href="/#product">Продукты</a></li>
                    <li><a class="main-menu__link" href="/contacts/">Контакты</a></li>
                </ul>-->


                <a href="#" class="page-header__search"></a>
                <a href="tel:+78123132311" class="page-header__tel">ТЕЛ.: <?= get_option('main_tel')?></a>
                <!--<div class="page-header__lang">
                    <a href="#" class="page-header__lang-item page-header__lang-item--active">RU</a>
                    <a href="#" class="page-header__lang-item">ENG</a>
                </div>-->
            </div>
        </nav>
        <div class="main-menu__burger-wrapper">
            <div class="main-menu__burger"></div>
        </div>
    </div>
</header>