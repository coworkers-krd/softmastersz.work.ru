<?php
global $post;
$args = array( 'numberposts' => -1 ,'category' => get_cat_ID( 'Книги, издания' ), 'orderby' => 'date');
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);
    ?>

    <div class="magazine__books-item">
        <div class="magazine__img-wrapper">
            <?
            $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), array(240,390) ); // возвращает массив параметров миниатюры
            ?>

            <img src="<?= $thumbnail_attributes[0]?>" alt="" class="magazine__img">
        </div>
        <p class="magazine__text"><?php the_title(); ?></p>
        <p class="magazine__subtext"><?= get_post_meta( get_the_ID(), 'subtext', true )?></p>
        <a href="<?php the_permalink() ?>" class="magazine__btn">Читать</a>
    </div>

    <?php
}
wp_reset_postdata();
?>


