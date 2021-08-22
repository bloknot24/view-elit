<?php
    error_reporting(-1);
    include_once('../model/query.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Стяжка пола</title>
    <meta name="description" content="Это дискриптор сайта">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="icon" href="img/header/icon.png">
    <link rel="shortcut icon" href="img/header/icon.png">
    <link rel="icon" href="img/header/favicon.svg" type="image/svg+xml">
</head>
<body>
    <div class="ver_line1"></div>
    <div class="ver_line2"></div>
    <div class="ver_line3"></div>
    <header id="header">
        <div class="section__size">
            <div class="header__box">
                <a href="/">
                    <img src="img/header/logo.svg" alt="Логотип">
                </a>
                <nav class="menu__nav">
                    <ul class="menu__nav-list upper">
                        <li class="menu__nav-list-item">
                            <a href="/" class="menu__nav-list-item-link">Главная</a>
                        </li>
                        <li class="menu__nav-list-item">
                            <a href="#" class="menu__nav-list-item-link">Блог</a>
                        </li>
                        <li class="menu__nav-list-item">
                            <a href="#" class="menu__nav-list-item-link">Выполненные объекты</a>
                        </li>
                        <li class="menu__nav-list-item">
                            <a href="#" class="menu__nav-list-item-link">Отзывы</a>
                        </li>
                        <li class="menu__nav-list-item">
                            <a href="#" class="menu__nav-list-item-link">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <div class="tel__block">
                    <div class="tel__box">
                        <div>
                            <a href="#" class="tel__box-link">
                                <img src="img/header/icon-telegram.svg"
                                class="tel__box-icon" alt="Telegram">
                            </a>
                        </div>
                        <div>
                            <a href="#" class="tel__box-link">
                                <img src="img/header/icon-viber.svg"
                                class="tel__box-icon" alt="Viber">
                            </a>
                        </div>
                        <div>
                            <a href="tel:+375336679306" class="tel__box-number">
                                +375336679306
                            </a>
                        </div>
                    </div> <!--todo-->
                    <div class="button__call upper">
                        <a href="#" class="button__call-link">
                            Заказать звонок
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="hr__block"></div>
    <section id="first">
        <div class="section__size">
            <div class="first__box">
                <div class="first__box-head">
                    <h1 class="first__box-head-text upper">
                        Идеально pовный пол<br>
                        за 1 день с гарантией на 5 лет.
                    </h1>
                    <div class="first__box-btn">
                        <a href="#" class="first__box-btn-link upper">
                            Получить консультацию
                        </a>
                    </div>
                </div>
                <div class="first__box-img">
                    <img src="img/first/img-floor.svg"
                    class="img-floor" alt="Пол">
                    <img src="img/first/img-layer.svg"
                    class="img-layer" alt="Слой">
                    <img src="img/first/img-trowel.svg"
                    class="img-trowel" alt="Затирочная машина">
                </div>
            </div>
            <div class="advantage__box">
                <div class="advantage__box-block">
                    <img src="img/advantage/icon-floor.svg" alt="Технология"
                    class="advantage__box-block-img-floor">
                    <p class="advantage__box-block-text">
                        Технология <strong>полусухой</strong><br>
                        механизированной стяжки
                    </p>
                </div>
                <div class="advantage__box-block">
                    <img src="img/advantage/icon-warranty.svg" alt="Гарантия"
                    class="advantage__box-block-img-warranty">
                    <p class="advantage__box-block-text">
                        <strong>Гарантия</strong> на работы:<br>
                        производства - 2 года,<br>
                        жилые - 5 лет
                    </p>
                </div>
                <div class="advantage__box-block">
                    <img src="img/advantage/icon-neumatic-blower.svg" alt="Оборудование"
                    class="advantage__box-block-img-blower">
                    <p class="advantage__box-block-text">
                        <strong>Немецкое</strong> оборудование<br>
                        и технология стяжки
                    </p>
                </div>
                <div class="advantage__box-block">
                    <img src="img/advantage/icon-experience.svg" alt="Опыт"
                    class="advantage__box-block-img-experience">
                    <p class="advantage__box-block-text">
                        Опыт работы > <b>12 лет</b>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="hr__block"></div>
    <section id="order">
        <div class="section__size">
            <div class="h2__box-head">
                <h2 class="head-2">
                    Порядок работы.
                </h2>
                <div class="uderline__order-head"></div>
            </div>
            <div class="order__box-list">
                <div class="order__box-list-item">
                    <div class="order__box-list-item-element">
                        <img src="img/order/contract.svg"
                        alt="Договор" class="order__box-block-element-img">
                        <div class="order__box-block-element-block">
                            <h3 class="order__box-block-element-block-head">
                                Договор
                            </h3>
                            <p class="order__box-block-element-block-text">
                                Встреча с заказчиком, предварительный<br>
                                осмотр, замеры, согласование объемов<br>
                                работ и стоимости.
                            </p>
                        </div>
                    </div>
                    <div class="order__box-list-item-element">
                        <img src="img/order/preparatory.svg"
                        alt="Договор" class="order__box-block-element-img">
                        <div class="order__box-block-element-block">
                            <h3 class="order__box-block-element-block-head">
                                Подготовительные работы
                            </h3>
                            <p class="order__box-block-element-block-text">
                                Прибытие на объект с бригадой,<br>
                                доставка оборудования, установка<br>
                                маяков под лазер.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="order__box-list-item">
                    <div class="order__box-list-item-element">
                        <img src="img/order/screed.svg"
                        alt="Стяжка" class="order__box-block-element-img">
                        <div class="order__box-block-element-block">
                            <h3 class="order__box-block-element-block-head">
                                Стяжка
                            </h3>
                            <p class="order__box-block-element-block-text">
                                Укладка и затирка стяжки затирочной<br>
                                машиной и нарезание деформационных<br>
                                швов.
                            </p>
                        </div>
                    </div>
                    <div class="order__box-list-item-element">
                        <img src="img/order/order.svg"
                        alt="Результат" class="order__box-block-element-img">
                        <div class="order__box-block-element-block">
                            <h3 class="order__box-block-element-block-head">
                                Результат
                            </h3>
                            <p class="order__box-block-element-block-text">
                                Сдача работ заказчику. Оплата<br>
                                исполнителю по выполнению.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="hr__block"></div>
    <section id="price">
        <div class="section__size">
            <div class="h2__box-head">
                <h2 class="head-2">
                    Стоимость работ.
                </h2>
                <div class="uderline__price-head"></div>
            </div>
            <div class="price__box">
                <div class="price__box-conditions">
                    <p class="price__box-conditions-text">
                        Для определения точной цены за стяжку пола, нужно<br>
                        брать в расчет следующие характеристики:
                    </p>
                    <ul class="price__box-conditions-list">
                        <li class="price__box-conditions-list-item">
                            &#8227; толщина стяжки;
                        </li>
                        <li class="price__box-conditions-list-item">
                            &#8227; площадь работ;
                        </li>
                        <li class="price__box-conditions-list-item">
                            &#8227; стоимость стройматериалов;
                        </li>
                        <li class="price__box-conditions-list-item">
                            &#8227; расстояние до объекта, если<br>
                            свыше 50 км - цена выше.
                        </li>
                    </ul>
                </div>
                <div class="price__box-calc">
                    <div class="price__box-calc-block">
                        <img src="img/price/icon-calc.svg"
                        alt="Калькулятор" class="price__box-calc-block-img">
                        <p class="price__box-calc-block-text">
                            Тем не менее мы прелагаем<br>
                            рассчитать примерную стоимость:
                        </p>
                    </div>
                    <div class="price__box-calc-rendering">
                        Введите в поле площадь работ: <input type="text" placeholder="К примеру, 13"
                        class="price__box-calc-rendering-input">
                        <b>м<sup>2</sup></b>
                    </div>
                    <div class="price__box-calc-rendering-result">
                        Итоговая стоимость:
                        <b><span class="price__box-calc-rendering-result-span">
                        <u>здесь появится результат</u></span></b>
                        <b><span class="price__box-calc-rendering-result-span-ei"></span></b>
                    </div>
                    <script src="js/calc-index.js"></script>
                </div>
            </div>
            <div class="price__box-btn">
                <a href="#" class="price__box-btn-link upper">Заказать стяжку</a>
            </div>
        </div>
    </section>
    <div class="hr__block"></div>
    <section id="partfolio">
        <div class="section__size">
            <div class="h2__box-head">
                <h2 class="head-2">
                    Выполненные объекты.
                </h2>
                <div class="uderline__partfolio-head"></div>
            </div>
            <div class="box__slider">
                <img src="img/partfolio/arrow-slider-left.svg" alt="Стрелка"
                class="arrow-slider-left wow fadeInLeft" data-wow-delay="1s">
                <img src="img/partfolio/arrow-slider-right.svg" alt="Стрелка"
                class="arrow-slider-right wow fadeInRight" data-wow-delay="1s">
                <?php
                    $sliders = viewSlider();

                    foreach ($sliders as $slider) :
                ?>
                <div class="box__slider-element">
                    <div class="box__slider-element-block">
                        <div class="box__slider-element-img-block">
                            <div class="box__slider-element-img">
                                <img src="img/partfolio/<?=$slider['img_slider_one']?>" alt="Фото">
                            </div>
                            <div class="box__slider-element-img">
                                <img src="img/partfolio/<?=$slider['img_slider_two']?>" alt="Фото">
                            </div>
                        </div>
                        <div class="box__slider-element-img-block">
                            <div class="box__slider-element-img">
                                <img src="img/partfolio/<?=$slider['img_slider_three']?>" alt="Фото">
                            </div>
                            <div class="box__slider-element-img">
                                <img src="img/partfolio/<?=$slider['img_slider_four']?>" alt="Фото">
                            </div>
                        </div>
                        <div class="box__slider-element-img-back">
                            <img src="img/partfolio/<?=$slider['img_slider_five']?>" alt="Фото">
                        </div>
                    </div>
                    <p class="box__slider-element-block-description">
                        <?=$slider['slider_description']?>
                    </p>
                </div>
            <? endforeach; ?>
            </div>
            <div class="partfolio__box-btn">
                <a href="#" class="price__box-btn-link upper">Смотреть больше работ</a>
            </div>
        </div>
        <script src="js/slider.js"></script>
    </section>
    <div class="hr__block"></div>
    <section id="questions">
        <div class="section__size">
            <div class="h2__box-head">
                <h2 class="head-2">
                    Часто задаваемые вопросы.
                </h2>
                <div class="uderline__questions-head"></div>
            </div>
        </div>
    </section>

    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>
