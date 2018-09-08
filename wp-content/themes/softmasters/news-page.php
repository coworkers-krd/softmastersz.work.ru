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
    global $post;
    $args = array( 'numberposts' => -1 ,'orderby' => 'date');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ){ setup_postdata($post);

        get_template_part("modules/content/news-item");
    }
    wp_reset_postdata();
    ?>


    </div>
</section>



<?php get_footer(); ?>