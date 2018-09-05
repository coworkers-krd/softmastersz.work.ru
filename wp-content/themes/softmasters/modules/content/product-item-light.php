<?php if ( has_post_thumbnail()) { ?>
<li>
    <a href="<?php the_permalink() ?>" class="product__link">
        <img src="<? the_post_thumbnail_url()?>" alt="">
    </a>
</li>
<?php } ?>