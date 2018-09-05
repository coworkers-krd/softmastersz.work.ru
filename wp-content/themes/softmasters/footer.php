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
					<a href="#" class="page-footer__social"></a>
					<a href="#" class="page-footer__social"></a>
					<a href="#" class="page-footer__social"></a>
				</div>
			</div>

			<p class="page-footer__copyright">softmasters 2018 ©</p>

		</div>
	</footer>


	<!--<script src='/js/script.min.js?v=<?php /*echo date(U); */?>'></script>-->
    <?php wp_footer(); ?>
    </body>
    </html>