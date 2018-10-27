	<footer class="page-footer">
		<div class="container">
			<div class="page-footer__logo-wrapper">
				<img src="<?=get_stylesheet_directory_uri()?>/img/footer_logo.png" alt="" class="page-footer__logo">
			</div>

			<div class="page-footer__address">
				<!--<p>Россия, 188480,<br> Ленинградская область, г.Кингисепп,<br> Крикковское шоссе 20, офис 5Н.</p>-->
                <?= get_option('main_yr')?>
			</div>

			<div class="page-footer__contacts">
				<a href="#" class="page-footer__tel"><?= get_option('main_tel')?></a>
				<a href="#" class="page-footer__mail"><?= get_option('main_mail')?></a>
				<div class="page-footer__social">
					<a href="<?= get_option('social_vk')?>" class="page-footer__social-link page-footer__social-link--vk"></a>
					<a href="<?= get_option('social_insta')?>" class="page-footer__social-link page-footer__social-link--insta"></a>
					<a href="<?= get_option('social_fb')?>" class="page-footer__social-link page-footer__social-link--fb"></a>
				</div>
			</div>

			<p class="page-footer__copyright">softmasters <?= date('Y'); ?> ©</p>

		</div>
	</footer>

	<div class="modal_bg"></div>
	<div class="modal">
		<p>Презентацию по продукту вы можете получить, направив запрос на наш электронный адрес <a href="mailto:init@soft-masters.ru">init@soft-masters.ru</a></p>
		<span class="modal_close"></span>
	</div>


    <?php wp_footer(); ?>
    </body>
    </html>