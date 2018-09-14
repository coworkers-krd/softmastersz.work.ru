<section class="promo">
    <div class="container">
        <div class="promo__text-box">
            <h1 class="promo__title"><?= get_option('main_promo-label')?></h1>
            <p class="promo__text"><?= get_option('main_promo-text')?> </p>
        </div>
    </div>

    <div class="promo__video-box">
        <video id="mainVideo" preload="auto" muted playsinline autoplay="autoplay" loop="loop">
            <?php if(get_option('main_promo-video1')!=''):?>
            <source src="<?=get_stylesheet_directory_uri()?>/img/video/<?= get_option('main_promo-video1')?>" type="video/webm">
            <?php endif; ?>
            <?php if(get_option('main_promo-video2')!=''):?>
            <source src="<?=get_stylesheet_directory_uri()?>/img/video/<?= get_option('main_promo-video2')?>" type="video/mp4">
            <?php endif; ?>
        </video>
    </div>
</section>