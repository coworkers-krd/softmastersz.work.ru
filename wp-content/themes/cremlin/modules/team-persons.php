<?php
global $post;
$args = array( 'category' => get_cat_ID( 'Команда' ), 'orderby' => 'date');
$myposts = get_posts( $args );
$count = 0;
foreach( $myposts as $post ){ setup_postdata($post);
    $count++;
    ?>

    <?
    $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); // возвращает массив параметров миниатюры
    ?>

    <?
    if($count % 2 == 1){ ?>

        <div class="content__img-team">
            <img src="<?= $thumbnail_attributes[0]?>" alt="" class="content__img-team">
        </div>
        <?php the_content()?>

    <? }else {?>

        <?php the_content()?>
        <div class="content__img-team">
            <img src="<?= $thumbnail_attributes[0]?>" alt="" class="content__img-team">
        </div>

    <?  } ?>


    <?php
}
wp_reset_postdata();
?>

