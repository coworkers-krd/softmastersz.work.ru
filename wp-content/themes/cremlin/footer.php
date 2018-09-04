<footer class="page-footer">
		<div class="container">
            <?/*
            if( $menu_items = wp_get_nav_menu_items('footer-menu') ) { // "Меню для шапки" - это название моего меню. Вы можете также использовать ID или ярлык
                $menu_list = '';
                foreach ( $menu_items as $menu_item ) {
                    $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                    $url = $menu_item->url; */?><!--

                    <div class="link-cloud">
                        <?/*
                        echo '<a href="' . $url . '" class="link-cloud__item link-cloud__item--bold">' . $title . '</a>';
                        */?>

                        <?/*
                        var_dump(get_nav_menu_children_items( $menu_item->id, $menu_items)) ;
                        /*foreach ( $childrens as $child ) {

                            echo '<a href="' . $child->url . '" class="link-cloud__item">' . $child->title . '</a>';
                        }*/

                        ?>

                    </div>
                --><?/*}
            }
            */?>

			<div class="link-cloud">
				<a href="/chistye-bojcy-reki-chusovoj/" class="link-cloud__item link-cloud__item--bold">Чистые бойцы реки Чусовой</a>

			</div>

			<div class="link-cloud">
				<a href="/zhurnal-almaznaya-spichka/" class="link-cloud__item link-cloud__item--bold">Журнал “Алмазная спичка”</a>
				<!--<a href="#" class="link-cloud__item">№4 Август2017</a>-->

			</div>

			<div class="link-cloud">
				<a href="/knigi-izdaniya/" class="link-cloud__item link-cloud__item--bold">Книги, издания</a>


			</div>

			<div class="link-cloud">
				<a href="/project/" class="link-cloud__item link-cloud__item--bold">Наши проекты</a>


			</div>

			<div class="link-cloud">
				<a href="/o-nas/" class="link-cloud__item link-cloud__item--bold">О нас</a>
			</div>

			<div class="copyright">
				<img src="<?= get_template_directory_uri()?>/img/logo_port23.png" alt="" class="copyright__img">
				<p class="copyright__text">© АНО ИД “Кремлёвский стан”<br>2018-2018<br>Developed and built by PORT23</p>
			</div>
		</div>
	</footer>

	<script src="<?= get_template_directory_uri()?>/js/jquery-3.1.1.js"></script>
	<script src="<?= get_template_directory_uri()?>/js/input.mask.bundle.min.js"></script>
	<script src="<?= get_template_directory_uri()?>/js/jquery-migrate-1.4.1.min.js"></script>
	<script src="<?= get_template_directory_uri()?>/js/slick.js"></script>
	<script src="<?= get_template_directory_uri()?>/js/script.js"></script>

</body>
</html>