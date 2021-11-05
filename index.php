<?php
    error_reporting(-1);
    include_once('../model/query.php');
    $title = 'Стяжка пола';
    $description = 'Заказать идеально pовный пол с гарантией на 5 лет в Минске и Минской области.';
    include_once('header.php');
?>
    <div class="hr__block"></div>
    <section id="first">
        <div class="section__size">
            <div class="first__box">
                <div class="first__box-head">
                    <h1 class="first__box-head-text upper">
                        Идеально pовный пол<br>
                        за 1 день с гарантией на 5 лет.
                    </h1>
                    <h1 class="first__box-head-text-mobile upper">
                        Идеально pовный пол
                        за 1 день с гарантией на 5 лет.
                    </h1>
                    <div class="first__box-btn">
                        <a href="#form" class="first__box-btn-link upper">
                            Получить консультацию
                        </a>
                    </div>
                </div>
                <div class="first__box-img">
                    <img src="img/first/img-floor.svg"
                    class="img-floor wow fadeInDown" data-wow-delay="2s" alt="Пол">
                    <img src="img/first/img-layer.svg"
                    class="img-layer wow fadeInUp" data-wow-delay="2s" alt="Слой">
                    <img src="img/first/img-trowel.svg"
                    class="img-trowel wow bounceInLeft" data-wow-delay="3s"
                    alt="Затирочная машина">
                    <div class="first__box-img-block">
                        <img src="img/first/img-main.svg" alt="Общая картинка">
                    </div>
                </div>
            </div>
            <div class="advantage__box">
                <div class="advantage__box-block wow pulse" data-wow-delay="3.5s">
                    <img src="img/advantage/icon-floor.svg" alt="Технология"
                    class="advantage__box-block-img-floor">
                    <p class="advantage__box-block-text">
                        Технология <strong>полусухой</strong><br>
                        механизированной стяжки
                    </p>
                </div>
                <div class="advantage__box-block wow pulse" data-wow-delay="3.7s">
                    <img src="img/advantage/icon-warranty.svg" alt="Гарантия"
                    class="advantage__box-block-img-warranty">
                    <p class="advantage__box-block-text">
                        <strong>Гарантия</strong> на работы:<br>
                        производства - 2 года,<br>
                        жилые - 5 лет
                    </p>
                </div>
                <div class="advantage__box-block wow pulse" data-wow-delay="3.8s">
                    <img src="img/advantage/icon-neumatic-blower.svg" alt="Оборудование"
                    class="advantage__box-block-img-blower">
                    <p class="advantage__box-block-text">
                        <strong>Немецкое</strong> оборудование<br>
                        и технология стяжки
                    </p>
                </div>
                <div class="advantage__box-block wow pulse" data-wow-delay="3.9s">
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
                    <div class="order__box-list-item-element wow pulse" data-wow-delay="2s">
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
                    <div class="order__box-list-item-element wow pulse" data-wow-delay="2.5s">
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
                    <div class="order__box-list-item-element wow pulse" data-wow-delay="2s">
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
                    <div class="order__box-list-item-element wow pulse" data-wow-delay="2.5s">
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
                        alt="Калькулятор" class="price__box-calc-block-img
                        wow bounce" data-wow-delay="1s">
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
                        <b><span class="price__box-calc-rendering-result-span-ei"></span>*</b>
                    </div>
                    <div class="price__box-calc-rendering">
                        <p>* - <b>Итоговая цена</b> указана с учетом стройматериалов.</p>
                    </div>
                    <script src="js/calculator.js"></script>
                </div>
            </div>
            <div class="price__box-btn">
                <a href="#form" class="price__box-btn-link upper">Заказать стяжку</a>
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
                class="arrow-slider-left wow fadeInLeft" data-wow-delay="1.3s">
                <img src="img/partfolio/arrow-slider-right.svg" alt="Стрелка"
                class="arrow-slider-right wow fadeInRight" data-wow-delay="1.3s">
                <?php
                    $sliders = viewSliderPartfolio();

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
            <script src="js/partfolio.js"></script>
            <!-- <div class="partfolio__box-btn">
                <a href="#" class="price__box-btn-link upper">Смотреть больше работ</a>
            </div> -->
        </div>
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
            <div class="box__questions">
                <?php
                    $questions = viewQuestions();

                    foreach($questions as $question) :
                ?>
                <div class="box__questions-block wow zoomIn" data-wow-delay="1s">
                    <div class="box__questions-block-head-line" data="<?=$question['id_tab']?>">
                        <h4 class="box__questions-block-head">
                            <?=$question['question_tab']?>
                        </h4>
                        <p class="box__questions-block-head-plus" data="<?=$question['id_tab']?>"></p>
                    </div>
                    <p class="box__questions-block-text" data="<?=$question['id_tab']?>">
                        <?=$question['answer_tab']?>
                    </p>
                </div>
                <? endforeach; ?>
            </div>
            <script src="js/questions.js"></script>
        </div>
    </section>
    <div class="hr__block"></div>
    <section id="equipment">
        <div class="section__size">
            <div class="h2__box-head">
                <h2 class="head-2">
                    Наше оборудование.
                </h2>
                <div class="uderline__equipment-head"></div>
            </div>
            <div class="box__slider-equipment">
                <img src="img/partfolio/arrow-slider-left.svg" alt="Стрелка"
                class="arrow-slider-equipment-left wow fadeInRight" data-wow-delay="1.3s">
                <img src="img/partfolio/arrow-slider-right.svg" alt="Стрелка"
                class="arrow-slider-equipment-right wow fadeInRight" data-wow-delay="1.3s">
                <?php
                    $equipments = viewSliderEquipment();

                    foreach($equipments as $equipment) :
                ?>
                <div class="box__slider-element-equipment">
                    <div class="box__slider-element-equipment-block">
                        <img src="img/equipment/<?=$equipment['img_slider_equipment']?>" alt="Фото"
                        class="box__slider-element-equipment-block-img">
                        <h4 class="box__slider-element-equipment-block-head">
                            <?=$equipment['name_equipment']?>
                        </h4>
                        <p class="box__slider-element-equipment-block-text">
                            <?=$equipment['description_equipment']?>
                        </p>
                    </div>
                </div>
                <? endforeach; ?>
            </div>
            <script src="js/equipment.js"></script>
        </div>
    </section>
    <div class="hr__block"></div>
    <section id="contacts">
        <div class="section__size">
            <div class="h2__box-head">
                <h2 class="head-2">
                    Контакты.
                </h2>
                <div class="uderline__contacts-head"></div>
            </div>
            <div class="box__contacts-block">
                <div class="box__contacts-block-adress">
                    <ul class="box__contacts-block-adress-list">
                        <div class="box__contacts-block-adress-block">
                            <i class="fas fa-clock"></i>
                            <li class="box__contacts-block-adress-item">
                                <b>Время работы:</b> 09.00-20:00 Пн-Вс
                            </li>
                        </div>
                        <div class="box__contacts-block-adress-block">
                            <i class="fas fa-phone"></i>
                            <li class="box__contacts-block-adress-item">
                                <a href="tel:+375291207671" class="box__contacts-block-adress-item-link">
                                    +375 29 120-76-71</a>
                            </li>
                        </div>
                        <div class="box__contacts-block-adress-block">
                            <i class="fas fa-envelope"></i>
                            <li class="box__contacts-block-adress-item">
                                <a href="mailto:mail@styazhka-elit.by" class="box__contacts-block-adress-item-link">
                                    mail@styazhka-elit.by</a>
                            </li>
                        </div>
                        <div class="box__contacts-block-adress-block">
                            <i class="fas fa-user-alt"></i>
                            <li class="box__contacts-block-adress-item">
                                <b>Индивидуальный предприниматель</b><br>
                                Кузьмич Андрей Леонидович УНП 193036437<br>
                                г. Минск пр-т Газ. “Звязда”, 23 кв. 64
                            </li>
                        </div>
                    </ul>
                </div>
                <?php include_once('../widgets/mail/form-contacts.php');?>
                <div class="box__contacts-block-form" id="form">
                    <h4 class="box__contacts-block-form-head">
                        Вы можете оставить нам заявку.
                    </h4>
                    <? if($isSend): ?>
    					<p class="box__contacts-block-form-done">Спасибо, ваше письмо отправлено! Наш менеджер скоро с вами свяжется. =)</p>
    				<? else: ?>
                    <form class="box__contacts-block-form-action" action="#form" method="post">
                        <input type="text" name="nameContacts" placeholder="Введите ваше имя..."
                        value="<?=$nameContacts?>" class="box__contacts-block-form-input">
                        <span style="color:red; font-size:20px;">*</span><br>
                        <input type="tel" name="telContacts" placeholder="+375 (ХХ) ХХХ-ХХ-ХХ"
                        value="<?=$telContacts?>" class="box__contacts-block-form-input">
                        <span style="color:red; font-size:20px;">*</span><br>
                        <textarea name="textContacts" placeholder="Введите доп. информацию..." class="box__contacts-block-form-textarea"><?=$textContacts?></textarea><br>
                        <p class="box__contacts-block-form-head-text">
                            <?=$errorContacts?>
                        </p>
                        <button class="box__contacts-block-form-button upper" name="formContacts">Отправить</button>
                    </form>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="hr__block"></div>

    <?php include_once('footer.php'); ?>
