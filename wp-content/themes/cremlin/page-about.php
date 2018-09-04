<?php get_header();

/*
 * Template name: О нас
 */
?>


	<div class="main">
		<div class="container">
		
			<?php get_sidebar(); ?>

			<div class="main__box">

                <div class="content">
                    <h1 class="section-title"><?php the_title(); ?></h1>
                    <p class="content__text"><?php if (have_posts()): while (have_posts()): the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif;
                        wp_reset_postdata();?></p>
                </div>

                <div class="link link--about-page">
                    <h2 class="section-title">Команда</h2>
                    <div class="content__team-wrapper">

                        <?php get_template_part('/modules/team-persons')?>

                    </div>
                </div>

				<?php get_template_part('/modules/feedback')?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
	
