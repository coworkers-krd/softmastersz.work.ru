<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css?v=<?php echo date(U); ?>">
<title>SoftMasters - Главная</title>
</head>
<body>
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'); ?>

<section class="promo">
<div class="container">
<div class="promo__text-box">
<h1 class="promo__title">Умные <br>it решения <br>в логистике</h1>
<p class="promo__text">разрабатываем  и внедряем  собственные программные продукты для нужд крупных промышленных стивидорных, транспортных, добывающих предприятий. </p>
</div>
</div>

<div class="promo__video-box">
<video id="mainVideo" preload="auto" muted playsinline autoplay="autoplay" loop="loop"><source src="http://sydphoep.beget.tech/img/video/video_bgr_main.webm" type="video/webm"><source src="http://sydphoep.beget.tech/img/video/video_bgr_main.mp4" type="video/mp4"></video>
</div>
</section>

<section class="prefs" id="about">
<div class="container">
<h2 class="section-title">О  компании</h2>

<div class="bullit__wrapper">
<div class="bullit">
<div class="bullit__img-wrapper"><img src="/img/bullit_1.png" alt=""></div>
<p class="bullit__text">Работаем  с 2008 г.</p>
</div>
<div class="bullit">
<div class="bullit__img-wrapper"><img src="/img/bullit_2.png" alt=""></div>
<p class="bullit__text">Гарантируем высокий уровень надёжности и безопасности наших систем</p>
</div>
<div class="bullit">
<div class="bullit__img-wrapper"><img src="/img/bullit_3.png" alt=""></div>
<p class="bullit__text">Адаптируем наши продукты под любые требования заказчика</p>
</div>
<div class="bullit">
<div class="bullit__img-wrapper"><img src="/img/bullit_4.png" alt=""></div>
<p class="bullit__text">Наши системы позволяют полностью контролировать основные аспекты бизнеса предприятий</p>
</div>
</div>

<div class="prefs__box">
<div class="prefs__column">
<p>Нами наработан большой опыт по стыковке ИТ-систем для ведения бизнеса, нашей разработки (ILSARv3, ILSARShip, ILSAR RW, ILSARScale, ILSAREtranConnector, ILSARMobileMonitor, ILSAREcoMonitor) и различных внешних/смежных ИТ- и АСУТП-систем, установленных на промышленных предприятиях:</p>
<ul>
<li>производители/разработчики/вендоры: 1С, SAP, ORACLE, SIEMENS SIMATIC,АльфаПрибор, НИЦФОРС, ISS, Авитек-Плюс, АСИ, СТК;</li>
<li>системы считывания номеров вагонов (Бастион-Состав, Транзит-инспектор от ISS, АСКИН);</li>
<li>системы взвешивания ЖД-вагонов (ВТВ-Др, Триада, ВД-30, WeighTer, Тензо-М, Веста);</li>
<li>АСОУП ИВЦ РЖД - позволяет определять местоположения вагонов на сети железных дорог.</li>
<li>АС ЭТРАН ОАО РЖД (АСУ-АСУ интерфейс, проект ILSAREtranConnector) с применением ЭЦП, что позволяет исключить бумажные документы при оформлении перевозочных документов при работе с РЖД.</li>
</ul>
</div>

<div class="prefs__column">
<p>В арсенале Софтмастерс есть разработки по программному обеспечению на платформах Google Android, Apple iOS. Данные разработки позволяют реализовать системы принятия решений для менеджмента компаний на основе получения основных производственных показателей из ИЛС ILSAR, ИЛС ILSAR RW на переносные коммуникаторы/планшеты (iPhone, iPad и аналогичные), вести учет при работе с (например – приёмка/сдача вагонов) через ручные терминалы сбора данных типа Motorolla/Symbol, защищенные планшеты типа Torex Pad.</p>
<p>Накопленный опыт позволяет нашей компании дорабатывать наши ИТ-системы под любые требования заказчика в прогнозируемые сроки.</p>
</div>
</div>
</div>
</section>

<section class="info-map">
<div class="container">
<div class="info-map__box">
<h3>Карта взаимодействия <br>продуктов ILSAR</h3>
<p>кликните <span></span> для подробной информации </p>
</div>

<div class="info-map__nav">
<div onmousedown="return false" onselectstart="return false" class="info-map__btn info-map__btn--plus">приблизить</div>
<div onmousedown="return false" onselectstart="return false" class="info-map__btn info-map__btn--minus">уменьшить</div>
</div>
</div>

<div class="info-map__map-wrapper draggable" id="imapWrapper">
<div class="info-map__mask"></div>
<object data="/img/map/terminal.svg" type="image/svg+xml" id="imap" width="100%" height="auto"></object>

<div class="info-map__dot info-map__dot--d1">
<p class="info-map__text">Формирование накладных в ЭТРАН.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d2">
<p class="info-map__text">Передача данных об отгрузках в адрес порта.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d3">
<p class="info-map__text">Получение информации о пунктах назначения порожних вагонов. Данные об операторе.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d4">
<p class="info-map__text">Получение данных о количестве и характере груза.Передача данных о текущем статусе груза.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d5">
<p class="info-map__text">Информация об отправках в адрес порта. Формирование электронных накладных.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d6">
<p class="info-map__text">Передача таможенных документов.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d7">
<p class="info-map__text">Данные о текущем положении вагонов. Данные о натурных листах поезда.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d8">
<p class="info-map__text">Текущее положение вагонов.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d9">
<p class="info-map__text">Прогноз погоды, уровень воды.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d10">
<p class="info-map__text">Телефонограммы о подаче, уборке. Задание на сортировку, выработку вагонов.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d11">
<p class="info-map__text">Обмен данными с корпоративной ERP системой, прием, списание груза.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d12">
<p class="info-map__text">Централизованное распределение информации между районами. Единое информационное пространство.<span class="info-map__close"></span></p>
</div>
<div class="info-map__dot info-map__dot--d13">
<p class="info-map__text">Работа всех районов порта в одном информационном пространстве.<span class="info-map__close"></span></p>
</div>

<div class="info-map__dot info-map__dot--d14">
<p class="info-map__text">При наличии системы СЦБ. Данные о текущем положении вагонов передаются автоматически.При наличии ЖД весов и систем считывания номеров данные передаются в систему.<span class="info-map__close"></span></p>
</div>

<div class="info-map__ship info-map__ship-1"></div>
<div class="info-map__ship info-map__ship-2"></div>
<div class="info-map__ship info-map__ship-3"></div>
<div class="info-map__ship info-map__ship-4"></div>
<div class="info-map__ship info-map__ship-5"></div>
</div>


</section>

<section class="history" id="history">
<div class="container">
<h2 class="section-title">История компании</h2>
<div class="history__box">
<div class="history__btn history__btn--next"></div>
<div class="history__btn history__btn--prev"></div>
<div class="history__wrapper">

<div class="history__case">
<h3 class="history__year"><span class="history__number">2009</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2009 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>

<div class="history__case">
<h3 class="history__year"><span class="history__number">2010</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2010 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>


<div class="history__case">
<h3 class="history__year"><span class="history__number">2011</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2011 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>

<div class="history__case">
<h3 class="history__year"><span class="history__number">2012</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2012 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>

<div class="history__case">
<h3 class="history__year"><span class="history__number">2013</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2013 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>

<div class="history__case">
<h3 class="history__year"><span class="history__number">2014</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2014 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>

<div class="history__case">
<h3 class="history__year"><span class="history__number">2015</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2015 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>

<div class="history__case">
<h3 class="history__year"><span class="history__number">2016</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2016 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>

<div class="history__case">
<h3 class="history__year"><span class="history__number">2017</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2017 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>

<div class="history__case active">
<h3 class="history__year"><span class="history__number">2018</span> год</h3>
<div class="history__content">
<ul>
<li>
<h3>2018 - Создана система ILSAR Mobile</h3>
<p>Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных </p>
</li>
<li>
<h3>Создана система ILSAR Mobile Monitor</h3>
<p>Разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств (коммуникаторы, планшеты) на базе ОС iOS (iPhone, iPad) Android (HTC Desire HD, ASUS Eee Pad Transformer), системы вывода производственных показателей на мобильные устройства</p>
</li>
</ul>
</div>
</div>



</div>
</div>
</div>
</section>

<section class="product" id="product">
<div class="container">

<h2 class="section-title section-title--white">Наши продукты</h2>

<div class="product__item">
<img src="/img/logo_ilsar.png" alt="" class="product__logo">
<p class="product__text">ИЛС ILSAR представляет собой единую систему оперативного и документального учета и контроля за грузом, ресурсами предприятия, занятыми в процессе приемки и отправки груза по средствам ж.-д., и автотранспорта, судов.</p>
<div class="product__btn-wrapper">
<a href="#" class="product__btn">подробнее</a>
</div>
</div>

<div class="product__item">
<img src="/img/logo_ilsar_ship.png" alt="" class="product__logo">
<p class="product__text">Информационная система автоматизированного учета отгрузок ILSARShip позволяет вести учет и контроль отгрузок грузов ж.д. и автомобильным транспортом. </p>
<div class="product__btn-wrapper">
<a href="/ilsar_ship/" class="product__btn">подробнее</a>
</div>
</div>

<div class="product__item">
<img src="/img/logo_ilsar_route.png" alt="" class="product__logo">
<p class="product__text">ИЛС ILSAR представляет собой единую систему оперативного и документального учета и контроля за грузом, ресурсами предприятия, занятыми в процессе приемки и отправки груза по средствам ж.-д., и автотранспорта, судов.</p>
<div class="product__btn-wrapper">
<a href="/ilsar_ship/" class="product__btn">подробнее</a>
</div>
</div>

<div class="product__item">
<img src="/img/logo_ilsar_eco_monitor.png" alt="" class="product__logo">
<p class="product__text">ИЛС ILSAR представляет собой единую систему оперативного и документального учета и контроля за грузом, ресурсами предприятия, занятыми в процессе приемки и отправки груза по средствам ж.-д., и автотранспорта, судов.</p>
<div class="product__btn-wrapper">
<a href="/ilsar_ship/" class="product__btn">подробнее</a>
</div>
</div>

<div class="product__item">
<img src="/img/logo_ilsar_scale.png" alt="" class="product__logo">
<p class="product__text">ИЛС ILSAR представляет собой единую систему оперативного и документального учета и контроля за грузом, ресурсами предприятия, занятыми в процессе приемки и отправки груза по средствам ж.-д., и автотранспорта, судов.</p>
<div class="product__btn-wrapper">
<a href="/ilsar_ship/" class="product__btn">подробнее</a>
</div>
</div>


<div class="product__item">
<img src="/img/logo_ilsar_rw.png" alt="" class="product__logo">
<p class="product__text">ИЛС ILSAR представляет собой единую систему оперативного и документального учета и контроля за грузом, ресурсами предприятия, занятыми в процессе приемки и отправки груза по средствам ж.-д., и автотранспорта, судов.</p>
<div class="product__btn-wrapper">
<a href="/ilsar_ship/" class="product__btn">подробнее</a>
</div>
</div>

<div class="product__item">
<img src="/img/logo_ilsar_mobile_monitor.png" alt="" class="product__logo">
<p class="product__text">ИЛС ILSAR представляет собой единую систему оперативного и документального учета и контроля за грузом, ресурсами предприятия, занятыми в процессе приемки и отправки груза по средствам ж.-д., и автотранспорта, судов.</p>
<div class="product__btn-wrapper">
<a href="/ilsar_ship/" class="product__btn">подробнее</a>
</div>
</div>

<div class="product__item">
<img src="/img/logo_ilsar_mobile.png" alt="" class="product__logo">
<p class="product__text">ИЛС ILSAR представляет собой единую систему оперативного и документального учета и контроля за грузом, ресурсами предприятия, занятыми в процессе приемки и отправки груза по средствам ж.-д., и автотранспорта, судов.</p>
<div class="product__btn-wrapper">
<a href="/ilsar_ship/" class="product__btn">подробнее</a>
</div>
</div>

<div class="product__item">
<img src="/img/logo_ilsar_etran_connector.png" alt="" class="product__logo">
<p class="product__text">ИЛС ILSAR представляет собой единую систему оперативного и документального учета и контроля за грузом, ресурсами предприятия, занятыми в процессе приемки и отправки груза по средствам ж.-д., и автотранспорта, судов.</p>
<div class="product__btn-wrapper">
<a href="/ilsar_ship/" class="product__btn">подробнее</a>
</div>
</div>
</div>
</section>

<section class="partner">
<div class="container">
<h2 class="section-title">Партнеры</h2>

<div class="partner__item">
<div class="partner__logo-wrapper">
<img src="/img/ASC_logo_1.png" alt="" class="partner__logo">
</div>
<div class="partner__text-wrapper">
<h3 class="partner__title">«Автоматизированные <br>Системы и Комплексы» <span>(Екатеринбург)</span></h3>
<p class="partner__text">партнёр по интеграции ИЛС ILSAR, ILSAR RW с системами МПЦ-СЦБ и разработчик и внедренец МПЦ-СЦБ АСК–управлением стрелочными переводами и системой централизованной безопасности на подъездных путях необщего пользования предприятий промышленного железнодорожного транспорта, с функциями слежения за перемещениями транспортных средств в режиме реального времени, на основе решений SIEMENS SIMATIC, системы счета осей АСК. Является поставщиком решений по автоматизации для перегрузочного оборудования и КИПиА общепромышленного назначения.</p>
</div>
</div>

<div class="partner__item">
<div class="partner__logo-wrapper">
<img src="/img/sgm_logo.png" alt="" class="partner__logo">
</div>
<div class="partner__text-wrapper">
<h3 class="partner__title">«Специализация, Гениальность и Мастерство» <br>- СГМ <span>(Санкт-Петербург)</span></h3>
<p class="partner__text">Разработка систем АСУ ТП перегрузочного оборудования (сыпучие грузы) и контроля инженерных, технологических систем промышленных предприятий (газ, электроэнергия, вода, тепло и т.д.), партнер по интеграции.</p>
</div>
</div>

<div class="partner__item">
<div class="partner__logo-wrapper">
<img src="/img/iss_logo.png" alt="" class="partner__logo">
</div>
<div class="partner__text-wrapper">
<h3 class="partner__title">«Интеллектуальные Системы Безопасности» <br>- ISS <span>(Москва)</span></h3>
<p class="partner__text">Разработка систем интеллектуального машинного зрения, системы распознавания номеров жд-вагонов и автомобилей.</p>
</div>
</div>
</div>
</section>

<section class="objects">
<div class="objects__box">
<h3>Карта объектов</h3>
</div>

<div class="objects__nav">
<div onmousedown="return false" onselectstart="return false" class="objects__btn objects__btn--plus">приблизить</div>
<div onmousedown="return false" onselectstart="return false" class="objects__btn objects__btn--minus">уменьшить</div>
</div>

<div class="objects__map-wrapper draggable" id="imapRussiaWrapper">
<div class="objects__mask"></div>
<object data="/img/map/russia-map-new.svg" type="image/svg+xml" id="imapRussia" width="100%" height="auto"></object>

<div class="objects__marker objects__marker--moscow2">
<p class="objects__text"><span class="bold">2016 год (Москва)</span><br>
Разработка и запуск сервиса прямого обмена данными с АС ЭТРАН РЖД в режиме АСУ-АСУ с ЭЦП (проект <span class="pink">ILSAREtranConnector</span>) на 13-ти площадках с установленными информационными системами учета отгрузок <span class="blue">ILSARShip</span> в группе компаний СУЭК. (Москва)<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--moscow">
<p class="objects__text"><span class="bold">2017 год (Москва)</span><br>
Разработка и запуск сервиса прямого обмена данными с АС ЭТРАН РЖД в режиме АСУ-АСУ с ЭЦП (проект <span class="pink">ILSAREtranConnector</span>) на 3-х стивидорных площадках установленными информационно-логистическими системами ILSAR по автоматизации стивидорной деятельности, в группе компаний СУЭК.
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--posiet">
<p class="objects__text"><span class="bold">2017 год (Приморский край, Хасанский район, п. г. т. Посьет)</span><br>
Разработка и запуск информационно-логистической системы <span class="yellow">ILSAR v3</span> по автоматизации и учету стивидорной деятельности для Торгового Порта Посьет.
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--chernogorsk">
<p class="objects__text"><span class="bold">2017 год (Черногорск, Республика Хакасия)</span><br>
Разработка и запуск информационно-логистической системы <span class="red">ILSAR RW</span> по автоматизации и учету деятельности Погрузочно-Транспортного Управления для АО «ПромТранс».
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--murmansk">
<p class="objects__text"><span class="bold">2018 год  (Мурманск) </span><br>
Разработка автоматизированной информационной системы производственного экологического контроля воздействия производственной деятельности предприятия на окружающую среду <span class="green">ILSAREcoMonitor</span> для ПАО «ММТП».
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--borodino-ilsar">
<p class="objects__text"><span class="bold">2012 год (г. Бородино, Красноярский край)</span><br>
Адаптация и запуск «Системы учёта отгрузок навалочных разработка и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Бородинский», Красноярский край, (ОАО «СУЭК-Красноярск»)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--borodino">
<p class="objects__text"><span class="bold">2017 год (Город Бородино, Красноярский край)</span><br>
Разработка и запуск информационно-логистической системы <span class="red">ILSAR RW</span> по автоматизации и учету деятельности Погрузочно-Транспортного Управления для Филиала АО «СУЭК-Красноярск» «Бородинское ПТУ». Красноярский край, Россия.
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--abakan">
<p class="objects__text"><span class="bold">2016 год (Абакан) </span><br>
АРМ <span class="orange">ILSARScale</span> для всех весовых пунктов (ЖД-/Авто- отгрузки), точек взвешивания (27 шт.) на ООО «СУЭК-Хакасия», для унификации всего используемого оборудования и работе в режиме «одного окна» или по заданиям на погрузку, с увязкой с ИСАУО ILSARShip и корпоративной ERP.
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--chara">
<p class="objects__text"><span class="bold">2014 год (Забайкальский край, Каларский р-н, с. Чара)</span><br>
адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – Информационная система автоматизированного учета отгрузок <span class="blue">ILSARShip</span>) на разрезе Апсатский (ООО «Арктические разработки»)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--kirba">
<p class="objects__text"><span class="bold">2013 год (Республика Хакасия, Бейский р-н, с. Кирба)</span><br>
адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов ишахт горнодобывающих предприятий» (проект ИСАУО <span class="blue">ILSARShip</span>) на Восточно-Бейском разрезе (ООО «Восточно-Бейский разрез»)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--vanino">
<p class="objects__text"><span class="bold">2011 год (Ванинский р-н, Хабаровский край)</span><br>
Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных (система ILSARMobile) на Ванинском балкерном терминале в МТП Ванино, Хабаровский край, (ЗАО Дальтрансуголь).
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--vanino2">
<p class="objects__text"><span class="bold">2011 год (Ванинский р-н, Хабаровский край)</span><br>
разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств на базе ОС iOS, Android системы вывода производственных показателей на мобильные устройства (система <span class="pink">ILSARMobileMonitor</span>) на Ванинском балкерном терминале в МТП Ванино, Хабаровский край.
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--whiteyar">
<p class="objects__text"><span class="bold">2013 год (Республика Хакасия, Алтайский р-н, с. Белый Яр) </span><br>
Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе Изыхский («Разрез Изыхский»)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--chernogorsk2">
<p class="objects__text"><span class="bold">2013 год (Республика Хакасия, г.Черногорск)</span><br>
Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе Черногорский и шахте Хакасская (ООО «СУЭК-Хакасия»)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--nazarovo">
<p class="objects__text"><span class="bold">2013 год (Красноярский край, г.Назарово)</span><br>
Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – Информационная система автоматизированного учета отгрузок <span class="blue">ILSARShip</span>) на разрезах Назаровский, Березовский-1
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--vostocniy">
<p class="objects__text"><span class="bold">2012 год (Забайкальский край, Улетовский р-н, п. Дровяная)</span><br>
Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Восточный» (ООО «ЧитаУголь»)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--novoshaht">
<p class="objects__text"><span class="bold">2012 год (п.Новошахтинский Михайловский р-н Приморский край)</span><br>
Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на Разрезоуправление «Новошахтинское» (ОАО «ПриморскУголь»)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--sherlgora">
<p class="objects__text"><span class="bold">2012 год (Забайкальский край, Борзинский р-н, пгт. Шерловая Гора)</span><br>
адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Харанорский» (ОАО «Разрез Харанорский»).
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--sagannur">
<p class="objects__text"><span class="bold">2013 год (Республика Бурятия, Мухоршибирский район, поселок Саган-Нур)</span><br>
Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект –ИСАУО <span class="blue">ILSARShip</span>) на разрезе Тугнуйский (ООО «Тугнуйская Обогатительная Фабрика»).
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--penza">
<p class="objects__text"><span class="bold">2014 год (Пензенская обл.,Никольский р-н, с. Усть-Инза)</span><br>
Адаптация и запуск «Автоматизированной системы учёта отгрузок цементного завода» (проект – Информационная система автоматизированного учета отгрузок <span class="blue">ILSARShip</span>) в Никольском филиале ООО «Азия Цемент».
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--murmansk2">
<p class="objects__text"><span class="bold">2015 год (г. Мурманск)</span><br>
разработка и запуск информационно-логистической системы (ИЛС) <span class="yellow">ILSARv3</span> для автоматизации и учета стивидорной деятельности в Мурманском Морском Торговом Порту (ПАО «ММТП», Россия, г. Мурманск)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--spb">
<p class="objects__text"><span class="bold">2008 год (Санкт-Петербург)</span><br>
Разработка рабочей документации на ИТ-системы управления контейнерного терминала на территории ЗАО «Четвертая стивидорная компания», МТП Санкт-Петербург. Заказчик – ВАМИ-Автоматика, ген. заказчик - ОАО «ЛенМорНИИПроект».
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--ustluga">
<p class="objects__text"><span class="bold">2008 год (Усть-Луга, Лен. область)</span><br>
разработка и запуск информационно-логистической системы <span class="yellow">ILSAR</span> для угольного терминала в МТП Усть-Луга, Лен. область, (ОАО Ростерминалуголь)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--ustluga2">
<p class="objects__text"><span class="bold">2009 год (Усть-Луга, Лен. область)</span><br>
разработка технического задания на Информационную Производственно –Логистическую Систему Комплекса Наливных Грузов в МТП Усть-Луга (ОАО «Роснефтьбункер»). Заказчик – ВАМИ-Автоматика, ген. заказчик - ОАО «ЛенМорНИИПроект».
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--ustluga3">
<p class="objects__text"><span class="bold">2009 год (Усть-Луга, Лен. область)</span><br>
Разработка программного обеспечения системы управления и ввод в эксплуатацию системы конвейерного транспорта фирмы Takraf на угольном терминале в МТП Усть-Луга, Лен. область, (ОАО Ростерминалуголь)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--ustluga4">
<p class="objects__text"><span class="bold">2010 год (Усть-Луга, Лен. область,) </span><br>
интеграция системы МПЦ СЦБ от ЗАО «Автоматизированные системы и Комплексы» с <span class="bold">ИЛС ILSAR</span> для контроля за передвижением каждого вагона на собственных ЖД-путях на угольном терминале в МТП (ОАО Ростерминалуголь)
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--suhodol">
<p class="objects__text"><span class="bold">2014 год (порт Суходол) </span><br>
разработка проектной документации раздела <span class="bold">«АСУ Порта»</span> по объекту «Строительство нового специализированного порта на Дальневосточном побережье Российской Федерации для облегчения доступа к портовой инфраструктуре малых и средних угледобывающих предприятий». Заказчик – ООО «МорСтройТехнология». 
<span class="objects__close"></span></p>
</div>

<div class="objects__marker objects__marker--nahodka">
<p class="objects__text"><span class="bold">2015 год (г. Находка)</span><br>
Разработка и запуск информационно-логистической системы <span class="yellow">ILSAR</span> по автоматизации и учету стивидорной деятельности для Стивидорной Компании Малый Порт в МТП Восточный Порт, Приморский край, (ООО СК Малый Порт, входит в ОАО «СУЭК»).
<span class="objects__close"></span></p>
</div>
</div>

</section>

<section class="team">
<div class="container">
<h2 class="section-title">Наша команда:</h2>

<div class="team__item">
<div class="team__img-wrapper">
	<img src="/img/stuff_img.png" alt="" class="team__img">
</div>
<p class="team__name">Павел Картопольцев</p>
<p class="team__stuff">Генеральный директор</p>
</div>

<div class="team__item">
<div class="team__img-wrapper">
	<img src="/img/stuff_img.png" alt="" class="team__img">
</div>
<p class="team__name">Павел Картопольцев</p>
<p class="team__stuff">Генеральный директор</p>
</div>

<div class="team__item">
<div class="team__img-wrapper">
	<img src="/img/stuff_img.png" alt="" class="team__img">
</div>
<p class="team__name">Павел Картопольцев</p>
<p class="team__stuff">Генеральный директор</p>
</div>

<div class="team__item">
<div class="team__img-wrapper">
	<img src="/img/stuff_img.png" alt="" class="team__img">
</div>
<p class="team__name">Павел Картопольцев</p>
<p class="team__stuff">Генеральный директор</p>
</div>
</div>
</section>

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'); ?>

</body>
</html>
