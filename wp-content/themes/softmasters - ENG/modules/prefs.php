<?php if (have_posts()): while (have_posts()): the_post(); ?>
<section class="prefs" id="about">
    <div class="container">
        <h2 class="section-title">About company</h2>

        <div class="bullit__wrapper">
            <div class="bullit">
                <div class="bullit__img-wrapper"><img src="<?=get_stylesheet_directory_uri()?>/img/bullit_1.png" alt=""></div>
                <p class="bullit__text">We work since 2008.</p>
            </div>
            <div class="bullit">
                <div class="bullit__img-wrapper"><img src="<?=get_stylesheet_directory_uri()?>/img/bullit_2.png" alt=""></div>
                <p class="bullit__text">We guarantee a high level of reliability and security of our systems</p>
            </div>
            <div class="bullit">
                <div class="bullit__img-wrapper"><img src="<?=get_stylesheet_directory_uri()?>/img/bullit_3.png" alt=""></div>
                <p class="bullit__text">We adapt our products to any customer requirements</p>
            </div>
            <div class="bullit">
                <div class="bullit__img-wrapper"><img src="<?=get_stylesheet_directory_uri()?>/img/bullit_4.png" alt=""></div>
                <p class="bullit__text">Our systems allow you to fully control the main aspects of business enterprises</p>
            </div>
        </div>

        <div class="prefs__box">

            <?php the_content()?>

        </div>
    </div>
</section>
<?php endwhile; endif; ?>