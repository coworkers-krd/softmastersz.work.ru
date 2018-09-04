<?php
require( '/../../../wp-load.php');
get_header(); ?>

	<div class="main">
		<div class="container">
		
			<?php get_sidebar(); ?>

			<div class="main__box">

				<div class="content content--article">
                    <?php

                    $headers = array(
                        "Content-type: text/html; charset=utf-8",
                        "From: " . $_POST['name'] . " <" . $_POST['email'] . ">"
                    );


                    $message = "Вам отправлено письмо с сайта.\n";
                    $message .= "Имя Отправителя: ". $_POST['name'] . " Email: " . $_POST['email'] ." \n";
                    $message .= "Сообщение: ". $_POST['message'] ;

                    if(is_email( $_POST['email'] )){


                        if( wp_mail(get_option('admin_email'), $_POST['theme'], $message) ) { ?>

                            <div class="content__img-wrapper">
                                <h1 class="section-title">Письмо отправлено</h1>
                            </div>

                        <? }else{?>
                            <div class="content__img-wrapper">
                                <h1 class="section-title">Письмо не отправлено</h1>
                                <h2 class="section-title">Проверьте правильность введенных данных</h2>
                            </div>
                        <? } ?>

                    <? } else{ ?>

                    <div class="content__img-wrapper">
                        <h1 class="section-title">Письмо не отправлено</h1>
                        <h2 class="section-title">Ваш email не действителен</h2>
                    </div>
                    <? } ?>


				</div>

			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
	
