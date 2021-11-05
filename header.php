<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
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
                    <img src="img/header/logo.svg" alt="Логотип" class="img__logo">
                </a>
                <p class="header__logo-text">
                    Стяжка<br>
                    пола
                </p>
                <nav class="menu__nav">
                    <ul class="menu__nav-list upper">
                        <li class="menu__nav-list-item">
                            <a href="/" class="menu__nav-list-item-link">Главная</a>
                        </li>
                        <li class="menu__nav-list-item">
                            <a href="/#price" class="menu__nav-list-item-link">Цена</a>
                        </li>
                        <li class="menu__nav-list-item">
                            <a href="/#partfolio" class="menu__nav-list-item-link">Выполненные объекты</a>
                        </li>
                        <li class="menu__nav-list-item">
                            <a href="/#equipment" class="menu__nav-list-item-link">Оборудование</a>
                        </li>
                        <li class="menu__nav-list-item">
                            <a href="/#contacts" class="menu__nav-list-item-link">Контакты</a>
                        </li>
                    </ul>
                </nav>

                <!-- menu-mobile -->

                <div class="menu__mobile">
                    <span class="span__mobile"></span>
                    <span class="span__mobile"></span>
                    <span class="span__mobile"></span>
                </div>
                <div class="menu__mobile-list-block">
                    <ul class="menu__mobile-list">
                        <div class="menu__mobile-close">x</div>
                        <li class="menu__mobile-list-item">
                            <a href="/" class="menu__mobile-list-item-link">
                                Главная
                            </a>
                        </li>
                        <li class="menu__mobile-list-item">
                            <a href="/#price" class="menu__mobile-list-item-link">
                                Цена
                            </a>
                        </li>
                        <li class="menu__mobile-list-item">
                            <a href="/#partfolio" class="menu__mobile-list-item-link">
                                Выполненные объекты
                            </a>
                        </li>
                        <li class="menu__mobile-list-item">
                            <a href="/#equipment" class="menu__mobile-list-item-link">
                                Оборудование
                            </a>
                        </li>
                        <li class="menu__mobile-list-item">
                            <a href="/#contacts" class="menu__mobile-list-item-link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- end-menu-mobile -->

                <div class="tel__block">
                    <div class="tel__box">
                        <div>
                            <a href="#" class="tel__box-link">
                                <img src="img/header/icon-telegram.svg"
                                class="tel__box-icon" alt="Telegram">
                            </a>
                        </div>
                        <div>
                            <a href="viber://chat?number=375291207671" class="tel__box-link">
                                <img src="img/header/icon-viber.svg"
                                class="tel__box-icon" alt="Viber">
                            </a>
                        </div>
                        <div>
                            <a href="tel:+375291207671" class="tel__box-number">
                                +375291207671
                            </a>
                        </div>
                    </div> <!--todo-->
                    <div class="button__call upper">
                        <a href="#form" class="button__call-link">
                            Заказать звонок
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
