<div class="product__item">
	<?php if ( has_post_thumbnail()) { ?>
		<img src="<? the_post_thumbnail_url()?>" alt="" class="product__logo">
	<?php } ?>
	<p class="product__text"><b><?php the_title(); ?></b> – <?= get_the_excerpt()?></p>
	<div class="product__btn-wrapper">
		<?php if(get_post_meta( get_the_id(), 'meta_content', true) == 'no') { ?>
			<a href="#" class="product__btn js-get-presentation">подробнее</a>
		<?php } else {?>
			<a href="<?php the_permalink() ?>" class="product__btn">подробнее</a>
		<?php }?>
	</div>
</div>