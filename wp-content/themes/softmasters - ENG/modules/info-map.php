<section class="info-map">
    <div class="container">
        <div class="info-map__box">
            <h3>Map interaction <br>products ILSAR</h3>
            <p>click <span></span> for more information </p>
        </div>

        <div class="info-map__nav">
            <div onmousedown="return false" onselectstart="return false" class="info-map__btn info-map__btn--plus">приблизить</div>
            <div onmousedown="return false" onselectstart="return false" class="info-map__btn info-map__btn--minus">уменьшить</div>
        </div>
    </div>

    <div class="info-map__map-wrapper draggable" id="imapWrapper">
        <div class="info-map__mask"></div>
        <object data="<?=get_stylesheet_directory_uri()?>/img/map/terminal.svg" type="image/svg+xml" id="imap" width="100%" height="auto"></object>

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