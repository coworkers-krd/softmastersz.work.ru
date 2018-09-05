<div class="news__item">
    <p class="news__date"><?= get_the_date('d/m/Y')?></p>
    <p class="news__title"><?php the_title(); ?></p>


    <?php if ( has_post_thumbnail()) { ?>
    <div class="news__img-wrapper">
        <img src="<? the_post_thumbnail_url()?>" alt="" class="news__img">
    </div>
    <?php } ?>

    <p class="news__subtitle"><?= get_the_excerpt()?></p>

    <?php the_content()?>

</div>