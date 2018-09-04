<?php get_header();
/*
 * Template name: Книга
 * Template post type: post
 */
?>

	<div class="main">
		<div class="container">
		
			<?php get_sidebar(); ?>

			<div class="main__box">
                <h1 class="section-title"><?php the_title(); ?></h1>
                <div class="book__info">

                    <div class="book__img-wrapper">

                        <?
                        $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), array(320,490) ); // возвращает массив параметров миниатюры
                        ?>
                        <img src="<?= $thumbnail_attributes[0]?>" alt="" class="book__img">
                    </div>

                    <div class="book__text">

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
	
