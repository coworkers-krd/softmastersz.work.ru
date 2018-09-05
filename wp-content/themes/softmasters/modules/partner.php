<section class="partner">
    <div class="container">
        <h2 class="section-title">Партнеры</h2>

        <?php
        global $post;
        $args = array( 'numberposts' => -1 ,'category' => get_cat_ID( 'Партнеры' ), 'orderby' => 'date');
        $myposts = get_posts( $args );
        foreach( $myposts as $post ){ setup_postdata($post);

            get_template_part("modules/content/partner-item");
        }
        wp_reset_postdata();
        ?>
    </div>
</section>