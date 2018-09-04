<?php get_header();
/*
 * Template name: Алмазная спичка
 */
?>

	<div class="main">
		<div class="container">
		
			<?php get_sidebar(); ?>

			<div class="main__box">

                <?php get_template_part('/modules/almaz-2020')?>


                <?php get_template_part('/modules/almaz-2019')?>

                <?php get_template_part('/modules/almaz-2018')?>

                <?php get_template_part('/modules/almaz-2017')?>

			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
	
