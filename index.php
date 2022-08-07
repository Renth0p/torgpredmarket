<?php
$title = 'Torgpredmarket - доставка товар из Китая в Россию';
require 'components/app.php';
require 'components/header.php';
require 'components/modal.php';
?>

<div class="header">
    <div class="container" style="padding-top: 96px;">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <h1 class="mb-2">Доставка товаров из Великобритании<br> в Россию</h1>
                <p>Начните экономить до 80% на шопинге. Регистрируйтесь в OkeyPost,<br> чтобы покупать со скидками в UK
                    одежду, обувь, гаджеты известных<br> брендов и безопасно отправлять вещи в Россию.
                </p>
                <button class="btn__second" style="margin-top: 36px;margin-bottom: 108px;">Получить адрес в UK</button>
            </div>
            <div class="col-lg-5 col-md-12">
                <img src="./assets/img/SaleBanner/pic-1.svg" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h1 style="font-weight: 700;">Насколько выгодно <br>покупать?</h1>
    <div class="all_bls">
        <div data-tab-target="#kiyim" class="glava1 change">
            <div class="glavaContent transformY">
                <img src="./assets/img/icons/pic-1.svg" alt="clothes">
                <p>Одежда</p>
            </div>
        </div>
        <div data-tab-target="#elektronika" class="glava1">
            <div class="glavaContent transformY">
                <img src="./assets/img/icons/pic-2.svg" alt="clothes">
                <p>Электроника</p>
            </div>
        </div>
        <div data-tab-target="#aksesuar" class="glava1">
            <div class="glavaContent transformY">
                <img src="./assets/img/icons/pic-3.svg" alt="clothes">
                <p>Аксессуары</p>
            </div>
        </div>
        <div data-tab-target="#bolalarkiyimi" class="glava1">
            <div class="glavaContent transformY">
                <img src="./assets/img/icons/pic-4.svg" alt="clothes">
                <p>Для детей</p>
            </div>
        </div>
        <div data-tab-target="#sport" class="glava1">
            <div class="glavaContent transformY">
                <img src="./assets/img/icons/pic-5.svg" alt="clothes">
                <p>Для спорта</p>
            </div>
        </div>
        <div data-tab-target="#kosmetika" class="glava1">
            <div class="glavaContent transformY">
                <img src="./assets/img/icons/pic-6.svg" alt="clothes">
                <p>Косметика</p>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5" style="margin-bottom: 150px;cursor: pointer;">
    <div class="clotheSlide vrem" id="sectionClothes">
        <div class="swiper mySwiper" id="kiyim">
            <div class="swiper-wrapper vrem change" style="background-color: white !important;">
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 close" style="margin-top: 134px;">
                            <strong style="display:block;margin-bottom: 44px;font-size: 26px;">Columbia Barlow Pass 550
                                <br>Turbodown Jacket</strong>
                            <div class="sellrussia">
                                <img src="./assets/img/icons/flag_ru.svg" alt="russia">
                                <p>Цена в России<br><strong>7891,46₽</strong></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 blockKurtka"
                             style="margin-top: 54px;text-align: center;">
                            <div class="kurtkaImg">
                                <img src="./assets/img/icons/clothes_1.svg" width="100%" height="100%" alt="kurtka">
                            </div>
                            <p style="font-size: 18px;line-height: 10px;">Срок доставки примерно 10 дней</p>
                            <strong style="font-size: 26px;">Вы экономите до <span
                                        style="color: #01CD7D;">$101</span></strong>
                            <div class="isHidden">
                                <div class="ru">
                                    <div class="sellrussia">
                                        <img src="./assets/img/icons/flag_ru.svg" alt="russia">
                                        <p>Цена в России<br><strong>7891,46₽</strong></p>
                                    </div>
                                </div>
                                <div class="uk">
                                    <div class="sellrussia">
                                        <img src="./assets/img/icons/flag_china.svg" alt="china">
                                        <p>Цена в Китае <br><strong><span style="color: #01CD7D">¥409.4</span></strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 close" style="margin-top: 134px;">
                            <strong style="display:block;margin-bottom: 44px;font-size: 26px;">Доставка одежды из <br>Китая
                                от <span style="color: #01CD7D; font-size: 22px; font-weight: 400">¥100</span></strong>
                            <div class="sellrussia">
                                <img src="./assets/img/icons/flag_china.svg" alt="russia">
                                <p>Цена в UK <br><strong><span style="color: #01CD7D">¥80.62</span></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container ta4">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="fl">
                <img src="./assets/img/icons/icon-1.svg">
                <p>Экономия<br> до 70%</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="fl-2">
                <img src="./assets/img/icons/icon-2.svg">
                <p>Только подлинная <br> продукция</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="fl">
                <img src="./assets/img/icons/icon-3.svg">
                <p>Оперативная <br>доставка</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="fl" style="border: none;">
                <img src="./assets/img/icons/icon-4.svg">
                <p>Огромный выбор <br>товаров</p>
            </div>
        </div>
    </div>
</div>

<div class="header" style="margin-bottom: 160px;">
    <div class="container" style="padding-top: 96px;">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <img src="./assets/img/SaleBanner/pic-2.svg" class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-12">
                <h1 class="mb-2" style="font-size: 30px !important; line-height: 40px;">Поручите нашим мастерам шопинга
                    оформить заказы в английских магазинах и освободите время для более важных дел.</h1>
                <p style="font-weight: 400 !important;font-size: 18px !important;line-height: 30px;">Такой способ
                    покупки также подойдёт, если магазин принимает только английские карты.
                </p>
                <button class="btn__second" style="margin-top: 36px;margin-bottom: 108px;">Получить адрес в UK</button>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-bottom: 100px;">
    <h1>OkeyPost удобная и быстрая доставка<br> посылок из Великобритании </h1>
    <p>Рассчитайте стоимость доставки из Англии к вам домой. Мы получим ваши<br> посылки на складе, при необходимости
        объединим несколько доставок в одну<br> и отправим их к вам надежно упакованными.</p>
    <div class="qator5">
        <div class="secn1">
            <p style="float: left;">Страна:</p>
            <label>
                <i style="position: absolute;margin: 15px 20px 20px 10px;"><img src="./assets/img/delivery/GlobeHemisphereWest.svg"></i>
                <select>
                    <option value="Россия">Россия</option>
                    <option value="Россия">Россия</option>
                    <option value="Россия">Россия</option>
                </select>
            </label>
        </div>
        <div class="input1">
            <p style="float: left;">Город:</p>
            <label>
                <i style="position: absolute;margin: 15px 20px 20px 10px;"><img src="./assets/img/delivery/Buildings.svg"></i>
                <input type="text" placeholder="Москва">
            </label>
        </div>
        <div class="input1">
            <p style="float: left;">Индекс:</p>
            <label>
                <i style="position: absolute;margin: 15px 20px 20px 10px;"><img src="./assets/img/delivery/Notebook.svg"></i>
                <input type="text" placeholder="Введите индекс">
            </label>
        </div>
        <div class="input1">
            <p style="float: left;">Вес посылки:</p>
            <label>
                <i style="position: absolute;margin: 15px 20px 20px 10px;"><img src="./assets/img/delivery/Barbell.svg"></i>
                <input type="text" placeholder="0,5">
            </label>
        </div>
        <div class="secn2" style="margin: 0 !important;">
            <p style="float: left;">Дополнительные услуги:s</p>
            <label>
                <i style="position: absolute;margin: 15px 20px 20px 10px;"><img src="./assets/img/delivery/FileText.svg"></i>
                <select>
                    <option value="Выберите услуги">Выберите услуги</option>
                    <option value="Выберите услуги">Выберите услуги</option>
                    <option value="Выберите услуги">Выберите услуги</option>
                </select>
            </label>
        </div>
        <br><br>
        <button class="btn__second" style="float: left;margin-top: 40px;position: relative;margin-bottom: 51px;" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Рассчитать</button>
    </div>
</div>


<div class="container" style="margin-bottom: 100px;">
    <h1 style="margin-bottom: 10px">Варианты доставки:</h1>
    <div class="all_drops">
        <div class="first">
            <div class="drop">
                <div class="cc"><img src="./assets/img/variants/img-1.svg" alt="Варианты покупки"><h4>Почта России</h4></div>
            </div>
            <div class="on">
                <div class="srok">
                    <div class="mider">
                        <small>Сроки:</small><br>
                        <strong>10-14 дней</strong>
                    </div>
                </div>
                <div class="srok">
                    <div class="mider">
                        <small>Стоимость доставки:</small><br>
                        <strong>от £27.00</strong>
                    </div>
                </div>
                <div class="srok">
                    <div class="mider">
                        <small>Итого:</small><br>
                        <strong>£41.99</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="first">
            <div class="drop">
                <div class="cc"><img src="./assets/img/variants/img-2.svg" alt="Варианты покупки"><h4>EMS ПОЧТА РОССИЯ</h4></div>
            </div>
            <div class="on">
                <div class="srok">
                    <div class="mider">
                        <small>Сроки:</small><br>
                        <strong>10-14 дней</strong>
                    </div>
                </div>
                <div class="srok">
                    <div class="mider">
                        <small>Стоимость доставки:</small><br>
                        <strong>от £27.00</strong>
                    </div>
                </div>
                <div class="srok">
                    <div class="mider">
                        <small>Итого:</small><br>
                        <strong>£41.99</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="first">
            <div class="drop">
                <div class="cc"><img src="./assets/img/variants/img-3.svg" alt="Варианты покупки"><h4>ПОЧТА РОССИИ МЕЛКИЕ ПАКЕТЫ</h4></div>
            </div>
            <div class="on">
                <div class="srok">
                    <div class="mider">
                        <small>Сроки:</small><br>
                        <strong>10-14 дней</strong>
                    </div>
                </div>
                <div class="srok">
                    <div class="mider">
                        <small>Стоимость доставки:</small><br>
                        <strong>от £27.00</strong>
                    </div>
                </div>
                <div class="srok">
                    <div class="mider">
                        <small>Итого:</small><br>
                        <strong>£41.99</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-bottom: 150px;margin-top: 50px;">
    <h1 style="margin-bottom: 50px;font-weight: 800;font-size: 38px;line-height: 50px;">4 простых шага для ваших<br>
        покупок в Великобритании </h1>
    <div class="row" style="margin-bottom: 30px;">
        <div class="col-lg-3 col-md-6 col-sm-12 cw">
            <img src="./assets/img/steps/Illustration-1.svg" alt="steps photo"><br>
            <strong>ВЫ ВЫБИРАЕТЕ <br>ТОВАР</strong>
            <p style="font-size: 16px;line-height: 25px; margin-top: 10px;opacity: 0.7;">в английском магазине,
                оплачиваете и<br> указываете <b style="font-weight: 700;color: rgb(32, 232, 32);">адрес склада</b>
                OkeyPost</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 cw">
            <img src="./assets/img/steps/Illustration-2.svg" alt="steps photo"><br>
            <strong>ПОКУПКИ ПРИХОДЯТ <br>НА СКЛАД</strong>
            <p style="font-size: 16px;line-height: 25px; margin-top: 10px;opacity: 0.7;">и появляются в вашем личном
                кабинете на нашем сайте</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 cw">
            <img src="./assets/img/steps/Illustration.svg" alt="steps photo"><br>
            <strong>ОТПРАВЛЯЕМ ИХ <br>К ВАМ ДОМОЙ</strong>
            <p style="font-size: 16px;line-height: 25px; margin-top: 10px;opacity: 0.7;">в надежной упаковке, по
                выгодной цене и очень быстро</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 cw">
            <img src="./assets/img/steps/Illustration-3.svg" alt="steps photo"><br>
            <strong>ЗАБИРАЕТЕ<br> CВОЮ ПОСЫЛКУ</strong>
            <p style="font-size: 16px;line-height: 25px; margin-top: 10px;opacity: 0.7;">в пункте выдачи, на почте или с
                курьером</p>
        </div>
    </div>
    <h2 class="" style="font-weight: 300;font-size: 20px;line-height: 36px;opacity: 0.7;">Не хотите разбираться
        самостоятельно, наши мастера шопинга с радостью <br>купят все товары за вас.</h2>
    <button class="btn__second" style="margin-top: 30px;">Быстрая покупка</button>
</div>
<div class="header" style="margin-bottom: 160px;">
    <div class="container" style="padding-top: 40px;">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <img src="./assets/img/SaleBanner/pic-3.svg"
                     class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-12" style="display: flex;justify-content: center;align-items: flex-end;">
                <div>
                    <h1 class="mb-2" style="font-size: 30px !important; line-height: 40px;">Виртуальный тур по нашему
                        складу в реальном времени</h1>
                    <p style="font-weight: 400 !important;font-size: 18px !important;line-height: 30px;">Вы можете
                        всегда посмотреть на нашу слаженую работу на складе</p>
                    <button class="btn__second" style="margin-top: 36px;margin-bottom: 108px;">Попробовать</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-bottom: 80px;">
    <h1 style="margin-bottom: 10px;font-weight: 800;font-size: 30px;">120 000 довольных клиентов в России уже<br>
        сделали свой выбор</h1>
    <p style="font-size: 16px;line-height: 25px; margin-top: 10px;opacity: 0.7;">За последний год десятки тысяч наших
        клиентов заказали товары<br> из Англии и оставили 19 633 отзыва</p>
    <div class="row">
        <div class="col-md-4 col-sm-12 mt-3">
            <div class="bl3">
                <img style="margin-bottom: 30px;" src="./assets/img/choose/img-1.svg" alt=""><br>
                <strong>Больше не значит дороже</strong>
                <p style="font-size: 16px;line-height: 25px; margin-top: 10px;opacity: 0.7;">С ростом веса посылки цена
                    за каждые 0.5 кг уменьшается в прогрессии.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-3">
            <div class="bl3">
                <img style="margin-bottom: 30px;" src="./assets/img/choose/img-1.svg" alt=""><br>
                <strong>Быстрая обработка посылок</strong>
                <p style="font-size: 16px;line-height: 25px; margin-top: 10px;opacity: 0.7;">Посылка обрабатывается не
                    дольше 48 часов после поступления на склад.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-3">
            <div class="bl3">
                <img style="margin-bottom: 30px;" src="./assets/img/choose/img-1.svg" alt=""><br>
                <strong>Больше не значит дороже</strong>
                <p style="font-size: 16px;line-height: 25px; margin-top: 10px;opacity: 0.7;">Отслеживайте весь процесс с
                    помощью sms-уведомлений.</p>
            </div>
        </div>
    </div>
</div>
<div class="container mb-5">
    <h1 style="margin-bottom: 40px;font-weight: 800;font-size: 30px;">Отзывы и цитаты блогеров:</h1>
    <div class="row">
        <div class="col-lg-6 col-md-12 mt-3">
            <div class="row fwt" style="margin: 0;">
                <div class="col-lg-6 col-md-12">
                    <div class="rasm">
                        <img src="./assets/img/reviews/rev-2.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 yarm">
                    <strong>NIKOLAY S</strong><br>
                    <label>
                        <img src="./assets/img/reviews/stars.svg" alt="">
                    </label>
                    <p style="margin-bottom: 67px;opacity: 0.7;font-size: 14px;line-height: 22px;">Ваша доставка самая
                        быстрая и дешёвая!!!</p>
                    <p style="line-height: 20px;font-size: 15px;">
                        <small>Дата: 6 Ноября 2022</small><br>
                        <small>Город: Москва</small>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 mt-3">
            <div class="row fwt" style="margin: 0;">
                <div class="col-lg-6 col-md-12">
                    <div class="rasm">
                        <img src="./assets/img/reviews/rev-3.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 yarm">
                    <strong>Vladimir Y</strong><br>
                    <label>
                        <img src="./assets/img/reviews/stars.svg" alt="">
                    </label>
                    <p style="margin-bottom: 67px;opacity: 0.7;font-size: 14px;line-height: 22px;">Пуховик Levi’s c eBay. Всё приехало быстро и целым.</p>
                    <p style="line-height: 20px;font-size: 15px;">
                        <small>Дата: 12 сентября 2021</small><br>
                        <small>Город: Ростов-на-Дону</small>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 mt-3">
            <div class="row fwt" style="margin: 0;">
                <div class="col-lg-6 col-md-12">
                    <div class="rasm">
                        <img src="./assets/img/reviews/rev-4.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 yarm">
                    <strong>Aleksandr B</strong><br>
                    <label>
                        <img src="./assets/img/reviews/stars.svg" alt="">
                    </label>
                    <p style="margin-bottom: 67px;opacity: 0.7;font-size: 14px;line-height: 22px;">Очень быстро, надежно! Как всегда большое спасибо за работу!</p>
                    <p style="line-height: 20px;font-size: 15px;">
                        <small>Дата: 16 Ноября 2021</small><br>
                        <small>Город: Санкт-Петербург</small>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 mt-3">
            <div class="row fwt" style="margin: 0;">
                <div class="col-lg-6 col-md-12">
                    <div class="rasm">
                        <img src="./assets/img/reviews/rev-1.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 yarm">
                    <strong>OLEG E</strong><br>
                    <label>
                        <img src="./assets/img/reviews/stars.svg" alt="">
                    </label>
                    <p style="margin-bottom: 67px;opacity: 0.7;font-size: 14px;line-height: 22px;">Огонь, как всегда! Отдельное спасибо за доп.упаковку, часики от Apple пришли в простом бумажном пакете )</p>
                    <p style="line-height: 20px;font-size: 15px;">
                        <small>Дата: 16 Ноября 2021</small><br>
                        <small>Город: Санкт-Петербург</small>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <a href="#">
        <button class="btn__second" style="margin-top: 50px;margin-left: 10px;" type="button">Все отзывы</button>
    </a>
</div>
<div class="container" style="margin-bottom: 150px;">
    <h1 style="margin-bottom: 40px;font-weight: 800;font-size: 30px;">Ваш личный адрес в Великобритании для покупок</h1>
    <p style="opacity: 0.7;">С нами вы получаете целых два адреса в UK! У нас есть два склада для приема посылок – в
        Лондоне и Манчестере. Указывайте в магазине тот из них, отправка на который обойдется дешевле (или покупка будет
        без налогов). Чаще всего в Лондоне наши клиенты заказывают одежду и обувь, а в Манчестер идут гаджеты и всё
        остальное. С OkeyPost вы всегда получаете максимальную выгоду!</p>
    <p style="opacity: 0.7;">При доставке из UK в Россию все ваши товары обязательно страхуются. Прием посылок на наш
        склад, их обработка, удаление лишних коробок, хранение сроком до 70 дней – у нас полностью бесплатно. Мы также
        бесплатно проводим объединение посылок из разных магазинов в одну. Это необходимо для снижения стоимости
        доставки посылок из UK в Россию.</p>
    <p style="opacity: 0.7;">У нас самая выгодная доставка! От $11.99 за посылку! А если у вас есть какие-то особенные
        требования, вроде проверки техники или дополнительной пленки для самых хрупких товаров, – операторы нашего
        склада с радостью выполнят их по спецзапросу.</p>
    <p style="opacity: 0.7;">Okeypost.com – это надежно, быстро и выгодно. А в наших соцсетях вы всегда найдете
        информацию о лучших скидках fyukbqcrb[ магазинов. Не обязательно заходить в Черную пятницу или Prime Day, крутые
        акции проходят каждый день!</p>
</div>
<div class="header" style="margin-bottom: 160px;">
    <div class="container" style="padding-top: 66px;padding-bottom: 54px;">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h2 class="mb-2" style="font-size: 30px !important; line-height: 40px;color: white;font-weight: 700;">
                    Подпишитеть и будьте в курсе всех скидок и акций магазинов Великобритании!
                </h2>
            </div>
            <div class="col-lg-4 offset-lg-1 col-md-12">
                <div class="mailInp">
                    <img src="images/EnvelopeSimpleOpen.png">
                    <input type="text" placeholder="Введите ваш email">
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-12">
                <div style="display: flex;justify-content: flex-start;margin-top: 25%;">
                    <button class="btn__second" TYPE="button">Подписаться</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'components/footer.php';
?>