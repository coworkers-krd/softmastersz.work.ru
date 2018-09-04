<?php get_header();
/*
 * Template name: Политика конфиденциальности
 */
?>

<div class="main">
  <div class="container">
      
     <?php get_sidebar(); ?>

     <div class="main__box">

        <div class="content content--article">
            <h1 class="section-title"><?php the_title(); ?></h1>

            <?
                        $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); // возвращает массив параметров миниатюры
                        ?>
                        <img src="<?= $thumbnail_attributes[0]?>" alt="" class="content__img">

                    <div class="project__content">
                        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <?php get_footer(); ?>
    
