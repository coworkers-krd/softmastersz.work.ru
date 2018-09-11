<?php if (have_posts()): while (have_posts()): the_post(); ?>
<section class="prefs" id="about">
    <div class="container">
        <h2 class="section-title">О  компании</h2>

        <div class="bullit__wrapper">
            <div class="bullit">
                <div class="bullit__img-wrapper"><img src="<?=get_stylesheet_directory_uri()?>/img/bullit_1.png" alt=""></div>
                <p class="bullit__text">Работаем  с 2008 г.</p>
            </div>
            <div class="bullit">
                <div class="bullit__img-wrapper"><img src="<?=get_stylesheet_directory_uri()?>/img/bullit_2.png" alt=""></div>
                <p class="bullit__text">Гарантируем высокий уровень надёжности и безопасности наших систем</p>
            </div>
            <div class="bullit">
                <div class="bullit__img-wrapper"><img src="<?=get_stylesheet_directory_uri()?>/img/bullit_3.png" alt=""></div>
                <p class="bullit__text">Адаптируем наши продукты под любые требования заказчика</p>
            </div>
            <div class="bullit">
                <div class="bullit__img-wrapper"><img src="<?=get_stylesheet_directory_uri()?>/img/bullit_4.png" alt=""></div>
                <p class="bullit__text">Наши системы позволяют полностью контролировать основные аспекты бизнеса предприятий</p>
            </div>
        </div>

        <div class="prefs__box">

            <?php the_content()?>

        </div>
    </div>
</section>
<?php endwhile; endif; ?>