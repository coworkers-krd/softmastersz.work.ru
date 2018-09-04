<?php
global $post;
$args = array( 'category' => get_cat_ID( 'Проекты' ), 'orderby' => 'date');
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);
    ?>

    <article class="link__item link__item--big">
        <h2 class="link__title"><?php the_title(); ?></h2>
        <div class="link__img-wrapper">
            <?
            $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); // возвращает массив параметров миниатюры
            ?>
            <img src="<?= $thumbnail_attributes[0]?>" alt="" class="link__img">
        </div>
        <div class="link__item-box">
            <?php the_excerpt()?>
            <a href="<?php the_permalink() ?>" class="link__btn">Читать<span> полностью</span></a>
        </div>
    </article>
    <?php
}
wp_reset_postdata();
?>