



<?php
global $post;


$args = array( 'numberposts' => -1 , 'category' => get_cat_ID( 'Алмазная спичка 2017' ), 'orderby' => 'date');
$myposts = get_posts( $args );
if($myposts) { ?>
<div class="magazine__list">
    <div class="magazine__block">
        <h2 class="section-title">2017 год</h2>
    <? foreach ($myposts as $post) {
        setup_postdata($post);
        ?>


        <div class="magazine__item">
            <div class="magazine__img-wrapper">
                <?
                $thumbnail_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(), array(160, 260)); // возвращает массив параметров миниатюры
                ?>
                <img src="<?= $thumbnail_attributes[0] ?>" alt="" class="magazine__img">
            </div>
            <p class="magazine__text"><?php the_title(); ?></p>
            <a href="<?php the_permalink() ?>" class="magazine__btn">Читать</a>
        </div>

        <?php wp_reset_postdata();
    }?>
    </div>
</div>

<? } ?>


