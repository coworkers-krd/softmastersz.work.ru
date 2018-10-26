<section class="objects">
    <div class="container container--top">
        <div class="objects__box">
            <h3>Карта объектов</h3>
        </div>
    </div>

    <div class="container container--bottom">
        <div class="filter">
            <div class="filter_item js-active-filter" data-type="asutp">
                <div class="checkbox"></div>
                <p class="text">АСУ</p>
            </div>
            <div class="filter_item js-active-filter" data-type="ir">
                <div class="checkbox"></div>
                <p class="text">Изыскательные работы</p>
            </div>
            <div class="filter_item js-active-filter" data-type="ilsar">
                <div class="checkbox"></div>
                <p class="text">Ilsar</p>
            </div>
            <div class="filter_item js-active-filter" data-type="v3">
                <div class="checkbox"></div>
                <p class="text">Ilsar V3</p>
            </div>
            <div class="filter_item js-active-filter" data-type="ship">
                <div class="checkbox"></div>
                <p class="text">Ilsar Ship</p>
            </div>
            <div class="filter_item js-active-filter" data-type="ecomonitor">
                <div class="checkbox"></div>
                <p class="text">Ilsar EcoMonitor</p>
            </div>

            <div class="filter_item js-active-filter" data-type="scale">
                <div class="checkbox"></div>
                <p class="text">Ilsar Scale</p>
            </div>
            <div class="filter_item js-active-filter" data-type="rw">
                <div class="checkbox"></div>
                <p class="text">Ilsar RW</p>
            </div>
            <div class="filter_item js-active-filter" data-type="ethranconnector">
                <div class="checkbox"></div>
                <p class="text">Ilsar EtranConnector</p>
            </div>
            <div class="filter_item js-active-filter" data-type="mobilemonitor">
                <div class="checkbox"></div>
                <p class="text">Ilsar Mobile</p>
            </div>
        </div>
        <div class="objects__nav">
            <div onmousedown="return false" onselectstart="return false" class="objects__btn objects__btn--plus">приблизить</div>
            <div onmousedown="return false" onselectstart="return false" class="objects__btn objects__btn--minus">уменьшить</div>
        </div>
    </div>

    <div class="objects__map-wrapper draggable" id="imapRussiaWrapper">
        <div class="objects__mask"></div>
        <!-- <object data="<?=get_stylesheet_directory_uri()?>/img/map/russia-map-new2-01.svg" type="image/svg+xml" id="imapRussia" width="100%" height="auto"></object> -->
        <img src="<?=get_stylesheet_directory_uri()?>/img/map/russia-map-new2-01.svg" id="imapRussia" alt="">


        <div class="objects__marker objects__marker--murmansk ecomonitor">
            <p class="objects__text"><span class="bold">2018 год  (Мурманск) </span>
                <br>
                Разработка автоматизированной информационной системы производственного экологического контроля воздействия производственной деятельности предприятия на окружающую среду <span class="green">ILSAREcoMonitor</span> для ПАО «ММТП».
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--borodino rw">
            <p class="objects__text"><span class="bold">2017 год (Город Бородино, Красноярский край)</span>
                <br>
                Разработка и запуск информационно-логистической системы <span class="red">ILSAR RW</span> по автоматизации и учету деятельности Погрузочно-Транспортного Управления для Филиала АО «СУЭК-Красноярск» «Бородинское ПТУ». Красноярский край, Россия.
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--posiet v3">
            <p class="objects__text"><span class="bold">2017 год (Приморский край, Хасанский район, пгт Посьет)</span>
                <br>
                Разработка и запуск информационно-логистической системы <span class="yellow">ILSAR v3</span> по автоматизации и учету стивидорной деятельности для Торгового Порта Посьет.
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--chernogorsk rw">
            <p class="objects__text"><span class="bold">2017 год (Черногорск, Республика Хакасия)</span>
                <br>
                Разработка и запуск информационно-логистической системы <span class="red">ILSAR RW</span> по автоматизации и учету деятельности Погрузочно-Транспортного Управления для АО «ПромТранс».
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--moscow ethranconnector">
            <p class="objects__text"><span class="bold">2017 год (Москва)</span>
                <br>
                Разработка и запуск сервиса прямого обмена данными с АС ЭТРАН РЖД в режиме АСУ-АСУ с ЭЦП (проект <span class="pink">ILSAREtranConnector</span>) на 3-х стивидорных площадках установленными информационно-логистическими системами ILSAR по автоматизации стивидорной деятельности, в группе компаний СУЭК.
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--moscow2 ethranconnector">
            <p class="objects__text"><span class="bold">2016 год (Москва)</span>
                <br>
                Разработка и запуск сервиса прямого обмена данными с АС ЭТРАН РЖД в режиме АСУ-АСУ с ЭЦП (проект <span class="pink">ILSAREtranConnector</span>) на 13-ти площадках с установленными информационными системами учета отгрузок <span class="blue">ILSARShip</span> в группе компаний СУЭК. (Москва)<span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--abakan scale">
            <p class="objects__text"><span class="bold">2016 год (Абакан) </span>
                <br>
                разработка и запуск Единого Автоматизированного Рабочего Места Весовщика АРМ <span class="orange">ILSARScale</span> для всех весовых пунктов (ЖД-/Авто- отгрузки), точек взвешивания (27 шт.) на ООО «СУЭК-Хакасия», для унификации всего используемого оборудования (системы взвешивания, системы оптического считывания номеров вагонов и автомобилей, системы управления светофорами, RFID-считывателями и т.д.) и работе в режиме «одного окна» или по заданиям на погрузку, с увязкой с ИСАУО ILSARShip и корпоративной ERP 
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--moscow3 ship">
            <p class="objects__text"><span class="bold">2015 год (Москва)</span>
                <br>
                разработка и запуск Единой Информационной Логистической Системы для ОАО «СУЭК» (создание единой ИЛС для анализа и планирования производственной деятельности на основе объединения данных из ИСАУО <span class="blue">ILSARShip</span> и ИЛС ILSAR)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--murmansk2 v3">
            <p class="objects__text"><span class="bold">2015 год (г. Мурманск)</span>
                <br>
                разработка и запуск информационно-логистической системы (ИЛС) <span class="yellow">ILSAR v3</span> для автоматизации и учета стивидорной деятельности в Мурманском Морском Торговом Порту (ПАО «ММТП», Россия, г. Мурманск)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--nahodka ilsar">
            <p class="objects__text"><span class="bold">2015 год (г. Находка)</span>
                <br>
                Разработка и запуск информационно-логистической системы <span class="yellow">ILSAR</span> по автоматизации и учету стивидорной деятельности для Стивидорной Компании Малый Порт в МТП Восточный Порт, Приморский край, (ООО СК Малый Порт, входит в ОАО «СУЭК»).
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--suhodol ir">
            <p class="objects__text"><span class="bold">2014 год (порт Суходол) </span>
                <br>
                разработка проектной документации раздела <span class="bold">«АСУ Порта»</span> по объекту «Строительство нового специализированного порта на Дальневосточном побережье Российской Федерации для облегчения доступа к портовой инфраструктуре малых и средних угледобывающих предприятий». Заказчик – ООО «МорСтройТехнология».
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--penza ship">
            <p class="objects__text"><span class="bold">2014 год (Пензенская обл.,Никольский р-н, с. Усть-Инза)</span>
                <br>
                Адаптация и запуск «Автоматизированной системы учёта отгрузок цементного завода» (проект – Информационная система автоматизированного учета отгрузок <span class="blue">ILSARShip</span>) в Никольском филиале ООО «Азия Цемент».
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--chara ship">
            <p class="objects__text"><span class="bold">2014 год (Забайкальский край, Каларский р-н, с. Чара)</span>
                <br>
                адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – Информационная система автоматизированного учета отгрузок <span class="blue">ILSARShip</span>) на разрезе Апсатский (ООО «Арктические разработки»)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--kirba ship">
            <p class="objects__text"><span class="bold">2013 год (Республика Хакасия, Бейский р-н, с. Кирба)</span>
                <br>
                адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов ишахт горнодобывающих предприятий» (проект ИСАУО <span class="blue">ILSARShip</span>) на Восточно-Бейском разрезе (ООО «Восточно-Бейский разрез»)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--whiteyar ship">
            <p class="objects__text"><span class="bold">2013 год (Республика Хакасия, Алтайский р-н, с. Белый Яр) </span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе Изыхский («Разрез Изыхский»)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--chernogorsk2 ship">
            <p class="objects__text"><span class="bold">2013 год (Республика Хакасия, г.Черногорск)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе Черногорский и шахте Хакасская (ООО «СУЭК-Хакасия»)
                <span class="objects__close"></span>
            </p>
        </div>

        <div class="objects__marker objects__marker--nazarovo ship">
            <p class="objects__text"><span class="bold">2013 год (Красноярский край, г.Назарово)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – Информационная система автоматизированного учета отгрузок <span class="blue">ILSARShip</span>) на разрезах Назаровский, Березовский-1
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--sagannur ship">
            <p class="objects__text"><span class="bold">2013 год (Республика Бурятия, Мухоршибирский район, поселок Саган-Нур)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект –ИСАУО <span class="blue">ILSARShip</span>) на разрезе Тугнуйский (ООО «Тугнуйская Обогатительная Фабрика»).
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--borodino-ilsar ship">
            <p class="objects__text"><span class="bold">2012 год (г. Бородино, Красноярский край)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных разработка и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Бородинский», Красноярский край, (ОАО «СУЭК-Красноярск»)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--chegomidan ship">
            <p class="objects__text"><span class="bold">2012 год (Хабаровский край, Верхнебуреинский р-н, п. Чегдомын)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Буреинский» и шахте «Северная», Хабаровский край, Россия (ОАО «УргалУголь»)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--sherlgora ship">
            <p class="objects__text"><span class="bold">2012 год (Забайкальский край, Борзинский р-н, пгт. Шерловая Гора)</span>
                <br>
                адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Харанорский» (ОАО «Разрез Харанорский»).
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--vostocniy ship">
            <p class="objects__text"><span class="bold">2012 год (Забайкальский край, Улетовский р-н, п. Дровяная)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на разрезе «Восточный» (ООО «ЧитаУголь»)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--novoshaht ship">
            <p class="objects__text"><span class="bold">2012 год (п.Новошахтинский Михайловский р-н Приморский край)</span>
                <br>
                Адаптация и запуск «Системы учёта отгрузок навалочных грузов с разрезов и шахт горнодобывающих предприятий» (проект – ИСАУО <span class="blue">ILSARShip</span>) на Разрезоуправление «Новошахтинское» (ОАО «ПриморскУголь»)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--ustluga4 ilsar">
            <p class="objects__text"><span class="bold">2011 год (Усть-Луга, Лен. область,) </span>
                <br>
                интеграция системы МПЦ СЦБ от ЗАО «Автоматизированные системы и Комплексы», с системой счета осей (ССО) Frauscher и <span class="bold">ИЛС ILSAR</span> для контроля за передвижением каждого вагона на собственных ЖД-путях на угольном терминале в МТП (ОАО Ростерминалуголь)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--vanino2 mobilemonitor">
            <p class="objects__text"><span class="bold">2011 год (Ванинский р-н, Хабаровский край)</span>
                <br>
                разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных (система <span class="pink">ILSARMobile</span> на Ванинском балкерном терминале в МТП Ванино, Хабаровский край, Россия. (ЗАО Дальтрансуголь)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--vanino3 mobilemonitor">
            <p class="objects__text"><span class="bold">2011 год (Ванинский р-н, Хабаровский край)</span>
                <br>
                разработка и запуск системы сдачи/приемки вагонов на ручных переносных терминалах сбора данных (система <span class="pink">ILSARMobile</span> на Ванинском балкерном терминале в МТП Ванино, Хабаровский край, Россия. (ЗАО Дальтрансуголь)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--vanino4 mobilemonitor">
            <p class="objects__text"><span class="bold">2011 год (Ванинский р-н, Хабаровский край)</span>
                <br>
                разработка и запуск системы принятия решения для руководящего персонала на основе мобильных устройств на базе ОС iOS, Android системы вывода производственных показателей на мобильные устройства (система <span class="pink">ILSARMobileMonitor</span>) на Ванинском балкерном терминале в МТП Ванино, Хабаровский край.
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--vanino ilsar">
            <p class="objects__text"><span class="bold">2010 год (Ванинский р-н, Хабаровский край)</span>
                <br>
                разработка и запуск информационно-логистической системы <span class="bold">ILSAR</span> для Ванинского балкерного терминала в МТП Ванино, Хабаровский край, Россия. (ЗАО Дальтрансуголь, входит в ОАО «СУЭК»).
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--ustluga5 asutp">
            <p class="objects__text"><span class="bold">2010 год (Усть-Луга, Лен. область) </span>
                <br>
                разработка и запуск <span class="bold">автоматизированной системы управления</span> размораживающими устройствами (тепляками) жд-вагонов в зимний период на угольном терминале в МТП Усть-Луга, Лен. область, Россия (ОАО Ростерминалуголь)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--ustluga3 asutp">
            <p class="objects__text"><span class="bold">2009 год (Усть-Луга, Лен. область)</span>
                <br>
                разработка и ввод в эксплуатацию АСТУП конвейерного транспорта фирмы Takraf на угольном терминале в МТП Усть-Луга, Лен. область, Россия (ОАО Ростерминалуголь)
                <span class="objects__close"></span>
            </p>
        </div>
        <div class="objects__marker objects__marker--ustluga ilsar">
            <p class="objects__text"><span class="bold">2008 год (Усть-Луга, Лен. область)</span>
                <br>
                разработка и запуск информационно-логистической системы <span class="yellow">ILSAR</span> для угольного терминала в МТП Усть-Луга, Лен. область, (ОАО Ростерминалуголь)
                <span class="objects__close"></span>
            </p>
        </div>





<!--         <div class="objects__marker objects__marker--spb">
            <p class="objects__text"><span class="bold">2008 год (Санкт-Петербург)</span>
                <br>
                Разработка рабочей документации на ИТ-системы управления контейнерного терминала на территории ЗАО «Четвертая стивидорная компания», МТП Санкт-Петербург. Заказчик – ВАМИ-Автоматика, ген. заказчик - ОАО «ЛенМорНИИПроект».
                <span class="objects__close"></span>
            </p>
        </div> -->



<!--         <div class="objects__marker objects__marker--ustluga2">
            <p class="objects__text"><span class="bold">2009 год (Усть-Луга, Лен. область)</span>
                <br>
                разработка технического задания на Информационную Производственно –Логистическую Систему Комплекса Наливных Грузов в МТП Усть-Луга (ОАО «Роснефтьбункер»). Заказчик – ВАМИ-Автоматика, ген. заказчик - ОАО «ЛенМорНИИПроект».
                <span class="objects__close"></span>
            </p>
        </div> -->



    </div>

</section>