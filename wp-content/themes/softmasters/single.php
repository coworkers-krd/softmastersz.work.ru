<?php get_header(); ?>

<section class="promo promo--ilsar-ship promo--product" style="background-image: url(<?php echo get_post_meta( get_the_id(), 'meta_img', true)?>)">
    <div class="container">
        <div class="promo__text-box">
            <h1 class="promo__title promo__title--product"><?php the_title(); ?></h1>
            <p class="promo__text"><?= get_the_excerpt()?></p>
        </div>
        <div class="promo__product-img-wrapper">
            <img src="<? the_post_thumbnail_url()?>" alt="">
        </div>
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
            $product_id = $post->ID;
            global $post;
            $args = array( 'numberposts' => -1 ,'post_type' => 'products', 'orderby' => 'date');
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){ setup_postdata($post);
                if($post->ID != $product_id){
                    if(get_post_meta( get_the_id(), 'meta_content', true) == 'yes') {
                        get_template_part("modules/content/product-item-light");
                    }
                }
            }
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</section>



<?php get_footer(); ?>
