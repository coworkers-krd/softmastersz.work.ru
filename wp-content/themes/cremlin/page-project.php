<?php get_header();
/*
 * Template name: Наши проекты
 */
?>


        <div class="main">
            <div class="container">

                <?php get_sidebar(); ?>

                <div class="main__box">

                    <div class="content content--article">
                        <h1 class="section-title"><?php the_title(); ?></h1>

                        <?php get_template_part('/modules/articles-project')?>

                    </div>

                </div>
            </div>
        </div>
	
<?php get_footer(); ?>
	
