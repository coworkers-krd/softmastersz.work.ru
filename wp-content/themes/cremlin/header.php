<!DOCTYPE html>
<html lang="ru" style="margin:0 !important">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>

	<header class="page-header">
		<div class="container">
			<a href="/" class="logo">
				<img src="<?= get_template_directory_uri()?>/img/logo_final.png" alt="" class="logo__img">
			</a>

			<div class="social">

                <?= (get_option('main_vk')!= '')? '<a href="'.get_option('main_vk').'" class="social__item social__item--vk"></a>': '' ?>
                <?= (get_option('main_mail')!= '')? '<a href="mailto:'.get_option('main_mail').'" class="social__item social__item--mail"></a>': '' ?>
                <?= (get_option('main_facebook')!= '')? '<a href="'.get_option('main_facebook').'" class="social__item social__item--fb"></a>': '' ?>
                <?= (get_option('main_rss')!= '')? '<a href="'.get_option('main_rss').'" class="social__item social__item--rss"></a>': '' ?>

			</div>



            <?php get_search_form(); ?>

            <div class="search__btn-header"></div>

			<div class="burger__wrapper">
				<div class="burger"></div>
			</div>
		</div>
	</header>