<section class="product" id="product">
    <div class="product__paralax"></div>
    <div class="container">

        <h2 class="section-title section-title--white">Наши продукты</h2>

        <?php
        global $post;
        $args = array( 'numberposts' => -1 ,'post_type' => 'products', 'orderby' => 'date');
        $myposts = get_posts( $args );
        foreach( $myposts as $post ){ setup_postdata($post);

            get_template_part("modules/content/product-item");
        }
        wp_reset_postdata();
        ?>

    </div>
</section>