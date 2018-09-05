<?php get_header(); ?>

<section class="promo promo--ilsar-ship promo--product">
    <div class="container">
        <div class="promo__text-box">
            <h1 class="promo__title promo__title--product"><?php the_title(); ?></h1>
            <p class="promo__text"><?= get_the_excerpt()?></p>
        </div>
        <img src="<? the_post_thumbnail_url()?>" alt="">
    </div>
</section>

<section class="content">
    <div class="container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

            <?php the_content()?>

        <?php endwhile; endif; ?>
    </div>
</section>

<section class="product product--light">
    <div class="container">
        <h3>Другие продукты:</h3>

        <ul>
            <?php
            global $post;
            $args = array( 'numberposts' => -1 ,'category' => get_cat_ID( 'Продукты' ), 'orderby' => 'date');
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){ setup_postdata($post);

                get_template_part("modules/content/product-item-light");
            }
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</section>

<script src='/js/script.min.js?v=<?php echo date(U); ?>'></script>

<?php get_footer(); ?>
