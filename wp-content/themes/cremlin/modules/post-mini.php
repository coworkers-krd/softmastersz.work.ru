<?php
global $post;
$args = array( 'numberposts' => 4 , 'orderby' => 'date');
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);
    ?>
    <article class="link__item link__item--post-mini">
    <h2 class="link__title"><?php the_title(); ?></h2>
        <div class="link__img-wrapper">
            <?
            $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(),'thumbnail' ); // возвращает массив параметров миниатюры
            ?>
            <img src="<?= $thumbnail_attributes[0] ?>" alt="" class="link__img">
        </div>
            <?php the_excerpt()?>
            <a href="<?php the_permalink() ?>" class="link__btn">Читать<span> полностью</span></a>
    </article>
    <?php
}
wp_reset_postdata();
?>