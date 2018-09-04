<?php get_header();
/*
 * Template name: Чистые бойцы реки Чусовой
 */
?>

<div class="main">
    <div class="container">

        <?php get_sidebar(); ?>

        <div class="main__box">

            <div class="content content--about">
                <div class="content__img-wrapper">
                    <?
                    $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), array(960,300) ); // возвращает массив параметров миниатюры
                    ?>
                    <img src="<?= $thumbnail_attributes[0] ?>" alt="" class="content__img">

                    <a href="/karta-proekta/" class="content__btn">Карта проекта</a>
                </div>

                <h1 class="section-title"><?php the_title(); ?></h1>

                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>

            <div class="link link--about">

                <div class="link__wrapper-about">

                    <?php get_template_part('/modules/rock-item')?>

                </div>
            </div>
        </div>
    </div>
	
<?php get_footer(); ?>
	
