<?php get_header();
/*
 * Template name: Книги, издания
 */
?>

	<div class="main">
		<div class="container">
		
			<?php get_sidebar(); ?>

			<div class="main__box">

                <div class="magazine__list">
                    <div class="magazine__block magazine__block--books">
                        <h2 class="section-title">Книги и издания</h2>

                        <?php get_template_part('/modules/book-item')?>

                    </div>
                </div>

			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
	
