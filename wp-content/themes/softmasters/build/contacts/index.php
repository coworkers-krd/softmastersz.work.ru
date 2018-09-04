<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="/style.css?v=<?php echo date(U); ?>">
	<title>SoftMasters - Контакты</title>
</head>
<body>
	<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'); ?>

	<section class="promo promo--contacts promo--product">
		<div class="container">
			<div class="promo__text-box">
				<h1 class="promo__title promo__title--product">контакты</h1>
			</div>
		</div>
	</section>

	<section class="contacts">
		<div class="container">
			<div class="contacts__box">
				<div class="contacts__column">
					<p class="contacts__title">ООО «СофтМастерс»</p>

					<div class="contacts__block">
						<p class="contacts__text">Физический адрес:</p>
						<p class="contacts__text">Россия, 188480, г. Кингисепп, Крикковское шоссе д. 20, офис 5Н</p>
					</div>
					<div class="contacts__block">
						<p class="contacts__text">Юридический адрес:</p>
						<p class="contacts__text">Россия, 188480, г. Кингисепп, Крикковское шоссе д. 20, помещение 5Н</p>
					</div>
				</div>
				<div class="contacts__column">
					<div class="contacts__block">
						<p class="contacts__text">Почтовый адрес:</p>
						<p class="contacts__text">Россия, 188480, г. Кингисепп, а/я 49</p>
					</div>
					<div class="contacts__block">
						<p class="contacts__text">Тел/факс:</p>
						<p class="contacts__text">+7(812) 313-23-11</p>
					</div>
					<div class="contacts__block">
						<p class="contacts__text">e-mail:</p>
						<p class="contacts__text">init@softmasters.ru  </p>
					</div>
				</div>
			</div>

			<div class="contacts__map-wrapper" id="contactMap"></div>
		</div>
	</section>


	<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'); ?>
	<script type="text/javascript" src="http://api-maps.yandex.ru/2.1/?lang=ru_RU&ongVer=4"></script>
</body>
</html>
