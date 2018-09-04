<?php get_header();
/*
 * Template name: Проект
 * Template post type: post
 */
?>

<div class="main">
  <div class="container">
      
     <?php get_sidebar(); ?>

     <div class="main__box">

        <h1 class="section-title"><?php the_title(); ?></h1>

        <?
                $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), array(320,490) ); // возвращает массив параметров миниатюры
                ?>
<!--                 <div class="project__gallery">
                    <img src="http://www.fillmurray.com/600/330" alt="" class="project__gallery-item">
                    <img src="http://www.fillmurray.com/600/330" alt="" class="project__gallery-item">
                    <img src="http://www.fillmurray.com/600/330" alt="" class="project__gallery-item">
                    <img src="http://www.fillmurray.com/600/330" alt="" class="project__gallery-item">
                    <img src="http://www.fillmurray.com/600/330" alt="" class="project__gallery-item">
                    <img src="http://www.fillmurray.com/600/330" alt="" class="project__gallery-item">
                    <img src="http://www.fillmurray.com/600/330" alt="" class="project__gallery-item">
                    <img src="http://www.fillmurray.com/600/330" alt="" class="project__gallery-item">
                </div> -->

                <div class="project__content">
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

