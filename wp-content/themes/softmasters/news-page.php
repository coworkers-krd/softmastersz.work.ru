<?php get_header();
    /*
    * Template name: Новости
    */
?>

<section class="promo promo--news promo--product">
    <div class="container">
        <div class="promo__text-box">
            <h1 class="promo__title promo__title--product">новости</h1>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">

    <?php
    /*global $post;
    $args = array( 'numberposts' => -1 ,'orderby' => 'date');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ){ setup_postdata($post);

        get_template_part("modules/content/news-item");
    }
    wp_reset_postdata();*/

    $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $params = array(
        'posts_per_page' => 10, // количество постов на странице
        'post_type'       => 'post', // тип постов
        'paged'           => $current_page // текущая страница
    );
    query_posts($params);

    $wp_query->is_archive = true;
    $wp_query->is_home = false;

    while(have_posts()): the_post();

        get_template_part("modules/content/news-item");

    endwhile;


    ?>

    <? wp_pagenavi(); ?>



    </div>
</section>



<?php get_footer(); ?>