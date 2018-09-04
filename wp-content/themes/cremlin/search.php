<?php get_header(); ?>

	<div class="main">
		<div class="container">
		
			<?php get_sidebar(); ?>

			<div class="main__box">

				<div class="content content--article">
					<div class="content__img-wrapper">
                        <h1 class="section-title">Поиск во фразе: <?= get_search_query() ?></h1>
					</div>

                    <?php if (have_posts()): while (have_posts()): the_post(); ?>

                    <article class="link__item link__item--big">
                        <h2 class="link__title"><?php the_title(); ?></h2>
                        <div class="link__img-wrapper">
                            <?
                            $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); // возвращает массив параметров миниатюры
                            ?>
                            <img src="<?= $thumbnail_attributes[0]?>" alt="" class="link__img">
                        </div>
                        <div class="link__item-box">
                            <p class="link__text"><?php the_excerpt()?></p>
                            <a href="<?php the_permalink() ?>" class="link__btn">Читать<span> полностью</span></a>
                        </div>
                    </article>

                    <?php endwhile; else: ?>
                        <h2 class="link__title">По вашему запросу ничего не найдено</h2>
                    <?php endif; ?>
				</div>

			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
	
