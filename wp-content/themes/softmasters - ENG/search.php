<?php get_header();

?>

    <section class="promo promo--news promo--product">
        <div class="container">
            <div class="promo__text-box">
                <h1 class="promo__title promo__title--product">Search results on request: <?=get_search_query()?></h1>
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
                'paged'           => $current_page, // текущая страница
                's'               => get_search_query()
            );
            query_posts($params);

            $wp_query->is_archive = true;
            $wp_query->is_home = false;

            while(have_posts()): the_post();

                get_template_part("modules/content/news-item");

            endwhile;


            if (!have_posts()){?>
                <h2 class="news__empty">Search on request "<?=get_search_query()?>" gave no results.</h2>
            <?php
            }
            ?>


            <? wp_pagenavi(); ?>



        </div>
    </section>



<?php get_footer(); ?>