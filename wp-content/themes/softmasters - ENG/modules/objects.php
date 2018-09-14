<section class="objects">
    <div class="container container--top">
        <div class="objects__box">
            <h3>Оbjects map</h3>
        </div>
    </div>

    <div class="container container--bottom">
        <div class="objects__nav">
            <div onmousedown="return false" onselectstart="return false" class="objects__btn objects__btn--plus">приблизить</div>
            <div onmousedown="return false" onselectstart="return false" class="objects__btn objects__btn--minus">уменьшить</div>
        </div>
    </div>

    <div class="objects__map-wrapper draggable" id="imapRussiaWrapper">
        <div class="objects__mask"></div>
        <object data="<?=get_stylesheet_directory_uri()?>/img/map/russia-map-new.svg" type="image/svg+xml" id="imapRussia" width="100%" height="auto"></object>

        <div class="objects__marker objects__marker--moscow2">
            <p class="objects__text"><span class="bold">2016 год (Москва)</span>
                <br>
                Разработка и запуск сервиса прямого обмена данными с АС ЭТРАН РЖД в режиме АСУ-АСУ с ЭЦП (проект <span class="pink">ILSAREtranConnector</span>) на 13-ти площадках с установленными информационными системами учета отгрузок <span class="blue">ILSARShip</span> в группе компаний СУЭК. (Москва)<span class="objects__close"></span></p>
        </div>

        <div class="objects__marker objects__marker--moscow">
            <p class="objects__text"><span class="bold">2017 год (Москва)</span>
                <br>
                Разработка и запуск сервиса прямого обмена данными с АС ЭТРАН РЖД в режиме АСУ-АСУ с ЭЦП (проект <span class="pink">ILSAREtranConnector</span>) на 3-х стивидорных площадках установленными информационно-логистическими системами ILSAR по автоматизации стивидорной деятельности, в группе компаний СУЭК.
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--chernogorsk">
            <p class="objects__text"><span class="bold">2017 год (Черногорск, Республика Хакасия)</span>
                <br>
                Разработка и запуск информационно-логистической системы <span class="red">ILSAR RW</span> по автоматизации и учету деятельности Погрузочно-Транспортного Управления для АО «ПромТранс».
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--murmansk">
            <p class="objects__text"><span class="bold">2018 год  (Мурманск) </span>
                <br>
                Разработка автоматизированной информационной системы производственного экологического контроля воздействия производственной деятельности предприятия на окружающую среду <span class="green">ILSAREcoMonitor</span> для ПАО «ММТП».
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--borodino-ilsar">
            <p class="objects__text"><span class="bold">2012 год (г. Бородино, Красноярский край)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных разработка и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Бородинский», Красноярский край, (ОАО «СУЭК-Красноярск»)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--borodino">
            <p class="objects__text"><span class="bold">2017 год (Город Бородино, Красноярский край)</span>
                <br>
                Разработка и запуск информационно-логистической системы <span class="red">ILSAR RW</span> по автоматизации и учету деятельности Погрузочно-Транспортного Управления для Филиала АО «СУЭК-Красноярск» «Бородинское ПТУ». Красноярский край, Россия.
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--abakan">
            <p class="objects__text"><span class="bold">2016 год (Абакан) </span>
                <br>
                АРМ <span class="orange">ILSARScale</span> для всех весовых пунктов (ЖД-/Авто- отгрузки), точек взвешивания (27 шт.) на ООО «СУЭК-Хакасия», для унификации всего используемого оборудования и работе в режиме «одного окна» или по заданиям на погрузку, с увязкой с ИСАУО ILSARShip и корпоративной ERP.
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--chara">
            <p class="objects__text"><span class="bold">2014 год (Забайкальский край, Каларский р-н, с. Чара)</span>
                <br>
                адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – Информационная система автоматизированного учета отгрузок <span class="blue">ILSARShip</span>) на разрезе Апсатский (ООО «Арктические разработки»)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--kirba">
            <p class="objects__text"><span class="bold">2013 год (Республика Хакасия, Бейский р-н, с. Кирба)</span>
                <br>
                адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов ишахт горнодобывающих предприятий» (проект ИСАУО <span class="blue">ILSARShip</span>) на Восточно-Бейском разрезе (ООО «Восточно-Бейский разрез»)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--vanino">
            <p class="objects__text"><span class="bold">2011 год (Ванинский р-н, Хабаровский край)</span>
                <br>
                Разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных (система ILSARMobile) на Ванинском балкерном терминале в МТП Ванино, Хабаровский край, (ЗАО Дальтрансуголь).
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--vanino2">
            <p class="objects__text"><span class="bold">2011 год (Ванинский р-н, Хабаровский край)</span>
                <br>
                разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств на базе ОС iOS, Android системы вывода производственных показателей на мобильные устройства (система <span class="pink">ILSARMobileMonitor</span>) на Ванинском балкерном терминале в МТП Ванино, Хабаровский край.
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--whiteyar">
            <p class="objects__text"><span class="bold">2013 год (Республика Хакасия, Алтайский р-н, с. Белый Яр) </span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе Изыхский («Разрез Изыхский»)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--chernogorsk2">
            <p class="objects__text"><span class="bold">2013 год (Республика Хакасия, г.Черногорск)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе Черногорский и шахте Хакасская (ООО «СУЭК-Хакасия»)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--nazarovo">
            <p class="objects__text"><span class="bold">2013 год (Красноярский край, г.Назарово)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – Информационная система автоматизированного учета отгрузок <span class="blue">ILSARShip</span>) на разрезах Назаровский, Березовский-1
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--vostocniy">
            <p class="objects__text"><span class="bold">2012 год (Забайкальский край, Улетовский р-н, п. Дровяная)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Восточный» (ООО «ЧитаУголь»)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--novoshaht">
            <p class="objects__text"><span class="bold">2012 год (п.Новошахтинский Михайловский р-н Приморский край)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на Разрезоуправление «Новошахтинское» (ОАО «ПриморскУголь»)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--sherlgora">
            <p class="objects__text"><span class="bold">2012 год (Забайкальский край, Борзинский р-н, пгт. Шерловая Гора)</span>
                <br>
                адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Харанорский» (ОАО «Разрез Харанорский»).
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--sagannur">
            <p class="objects__text"><span class="bold">2013 год (Республика Бурятия, Мухоршибирский район, поселок Саган-Нур)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект –ИСАУО <span class="blue">ILSARShip</span>) на разрезе Тугнуйский (ООО «Тугнуйская Обогатительная Фабрика»).
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--penza">
            <p class="objects__text"><span class="bold">2014 год (Пензенская обл.,Никольский р-н, с. Усть-Инза)</span>
                <br>
                Адаптация и запуск «Автоматизированной системы учёта отгрузок цементного завода» (проект – Информационная система автоматизированного учета отгрузок <span class="blue">ILSARShip</span>) в Никольском филиале ООО «Азия Цемент».
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--murmansk2">
            <p class="objects__text"><span class="bold">2015 год (г. Мурманск)</span>
                <br>
                разработка и запуск информационно-логистической системы (ИЛС) <span class="yellow">ILSARv3</span> для автоматизации и учета стивидорной деятельности в Мурманском Морском Торговом Порту (ПАО «ММТП», Россия, г. Мурманск)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--spb">
            <p class="objects__text"><span class="bold">2008 год (Санкт-Петербург)</span>
                <br>
                Разработка рабочей документации на ИТ-системы управления контейнерного терминала на территории ЗАО «Четвертая стивидорная компания», МТП Санкт-Петербург. Заказчик – ВАМИ-Автоматика, ген. заказчик - ОАО «ЛенМорНИИПроект».
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--ustluga">
            <p class="objects__text"><span class="bold">2008 год (Усть-Луга, Лен. область)</span>
                <br>
                разработка и запуск информационно-логистической системы <span class="yellow">ILSAR</span> для угольного терминала в МТП Усть-Луга, Лен. область, (ОАО Ростерминалуголь)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--ustluga2">
            <p class="objects__text"><span class="bold">2009 год (Усть-Луга, Лен. область)</span>
                <br>
                разработка технического задания на Информационную Производственно –Логистическую Систему Комплекса Наливных Грузов в МТП Усть-Луга (ОАО «Роснефтьбункер»). Заказчик – ВАМИ-Автоматика, ген. заказчик - ОАО «ЛенМорНИИПроект».
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--ustluga3">
            <p class="objects__text"><span class="bold">2009 год (Усть-Луга, Лен. область)</span>
                <br>
                Разработка программного обеспечения системы управления и ввод в эксплуатацию системы конвейерного транспорта фирмы Takraf на угольном терминале в МТП Усть-Луга, Лен. область, (ОАО Ростерминалуголь)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--ustluga4">
            <p class="objects__text"><span class="bold">2010 год (Усть-Луга, Лен. область,) </span>
                <br>
                интеграция системы МПЦ СЦБ от ЗАО «Автоматизированные системы и Комплексы» с <span class="bold">ИЛС ILSAR</span> для контроля за передвижением каждого вагона на собственных ЖД-путях на угольном терминале в МТП (ОАО Ростерминалуголь)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--suhodol">
            <p class="objects__text"><span class="bold">2014 год (порт Суходол) </span>
                <br>
                разработка проектной документации раздела <span class="bold">«АСУ Порта»</span> по объекту «Строительство нового специализированного порта на Дальневосточном побережье Российской Федерации для облегчения доступа к портовой инфраструктуре малых и средних угледобывающих предприятий». Заказчик – ООО «МорСтройТехнология».
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--nahodka">
            <p class="objects__text"><span class="bold">2015 год (г. Находка)</span>
                <br>
                Разработка и запуск информационно-логистической системы <span class="yellow">ILSAR</span> по автоматизации и учету стивидорной деятельности для Стивидорной Компании Малый Порт в МТП Восточный Порт, Приморский край, (ООО СК Малый Порт, входит в ОАО «СУЭК»).
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--posiet">
            <p class="objects__text"><span class="bold">2017 год (Приморский край, Хасанский район, п. г. т. Посьет)</span>
                <br>
                Разработка и запуск информационно-логистической системы <span class="yellow">ILSAR v3</span> по автоматизации и учету стивидорной деятельности для Торгового Порта Посьет.
                <span class="objects__close"></span>
            </p>
        </div>
    </div>

</section>