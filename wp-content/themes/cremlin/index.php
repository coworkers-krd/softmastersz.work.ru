<?php get_header(); ?>

	<div class="main">
		<div class="container">
		
			<?php get_sidebar(); ?>

			<div class="main__box">

				<div class="content">
					<div class="content__img-wrapper">
						<img src="http://via.placeholder.com/960x300" alt="" class="content__img">
					</div>

                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
					<h1 class="section-title"><?php the_title(); ?></h1>
					<p class="content__text">

                            <?php the_content(); ?>
                    </p>
                    <?php endwhile; endif; ?>
				</div>

				<div class="link">
					<h2 class="section-title">Последние материалы</h2>

					<div class="link__wrapper">
                        <?php get_template_part('/modules/post-mini')?>


					</div>

				</div>

                <?php get_template_part('/modules/feedback')?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
	
