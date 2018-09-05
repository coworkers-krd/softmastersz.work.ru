<div class="product__item">
    <?php if ( has_post_thumbnail()) { ?>
    <img src="<? the_post_thumbnail_url()?>" alt="" class="product__logo">
    <?php } ?>
    <p class="product__text"><b><?php the_title(); ?></b> – <?= get_the_excerpt()?></p>
    <div class="product__btn-wrapper">
        <a href="<?php the_permalink() ?>" class="product__btn">подробнее</a>
    </div>
</div>