<?php
global $post;
$args = array('numberposts' => 50, 'category' => get_cat_ID( 'Камни' ), 'orderby' => 'date');
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);
    ?>


    <article class="link__item">
        <div class="link__img-wrapper">
            <?
            $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), array(500,500) ); // возвращает массив параметров миниатюры
            ?>

            <img src="<?= $thumbnail_attributes[0]?>" alt="" class="link__img">
        </div>
        <span><?php the_title(); ?></span>
        <a href="<?php the_permalink() ?>" class="link__btn">Камень</a>
    </article>
    <?php
}
wp_reset_postdata();
?>