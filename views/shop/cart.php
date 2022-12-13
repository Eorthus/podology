<?php

/* @var $this yii\web\View */

$this->title = 'Препарат';

//$this->registerJsFile('js/cdekwidjet.js');
//
//$js = <<< ZZZZZ
//    var widjet = new ISDEKWidjet({
//        defaultCity: 'Санкт-Петербург',
//        cityFrom: 'Москва',
//        link: 'forpvz',
//        path: 'https://widget.cdek.ru/widget/scripts/',
//        servicepath: 'https://widget.cdek.ru/widget/scripts/service.php',
//    });
//ZZZZZ;
//
//$this->registerJs($js, yii\web\View::POS_READY);
?>
<style>
    .err-zone {
        color: red;
        margin: 15px 0;
        text-align: center;
    }

    .input-text {
        padding: 0 25px;
    }
</style>
<main>
    <section class="cart-main content font-size">
        <span class="index-h index-map-h pod-h3">Корзина</span>
        <div class="cart-main-container row">
            <div class="cart-main-info col-lg-8">
                <ul class="cart-main-info-orders">
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                        foreach ($_SESSION['cart'] as $prod_id => $product_in_cart) { ?>
                            <li class="cart-main-info-orders-li">
                                <div class="cart-main-info-orders-img">
                                    <img src="<?=$product_in_cart['img']?>" alt="order">
                                </div>
                                <div class="cart-main-info-orders-container">
                                    <div class="cart-main-info-orders-about">
                                        <span class="cart-main-info-orders-about-title"><?=$product_in_cart['name']?></span>
                                        <span class="view-main-articul">Артикул: 12342</span>
                                        <span class="cart-main-info-orders-about-price"><?=$product_in_cart['price']?>&nbsp;</span>
                                    </div>
                                    <div class="cart-main-info-orders-count" data-id="<?=$prod_id?>">
                                        <button class=" pod-btn count-minus">-</button>
                                        <input class="qty" type="text" value="<?=$product_in_cart['qty']?>">
                                        <button class=" pod-btn count-plus">+</button>
                                    </div>
                                </div>
                                <button class="cart-main-info-orders-del">
                                    <a href="index.php?r=cart/del-item&id=<?=$prod_id?>">
                                        <img src="./img/bin.png" alt="Корзина">
                                    </a>
                                </button>
                            </li>
                            <?php
                        }
                    } else {
                        echo "<span style='padding: 25px'>Корзина пуста</span>";
                    }
                    ?>

                </ul>
                <div class="cart-main-info-list">
                    <span class="index-h index-map-h pod-h3">Данные покупателя</span>
                    <div class="punct-info row">
                        <div class="punct-info-input ccol-12 col-sm-6">
                            <span class="cart-main-info-transport-pochta-title ">Имя</span>
                            <input type="text" class="input-text" id="input-name">
                        </div>
                        <div class="punct-info-input col-12 col-sm-6">
                            <span class="cart-main-info-transport-pochta-title ">Фамилия</span>
                            <input type="text" class="input-text" id="input-surname">
                        </div>
                        <div class="punct-info-input col-12 col-sm-6">
                            <span class="cart-main-info-transport-pochta-title ">Email</span>
                            <input type="email" class="input-text" id="input-email">
                        </div>
                        <div class="punct-info-input col-12 col-sm-6">
                            <span class="cart-main-info-transport-pochta-title ">Телефон</span>
                            <input type="phone" class="input-text phone" id="input-phone">
                        </div>
                    </div>
                </div>
                <div class="cart-main-info-transport" id="transport">
                    <span class="index-h index-map-h pod-h3">Доставка</span>
                    <nav class="account-window">
                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <button class="nav-link  form-radio tab-style active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-punct" type="button" role="tab" aria-controls="nav-punct"
                                    aria-selected="true">
                                <input id="dostavka" type="radio" name="transport" checked>
                                <label for="dostavka">Пункт выдачи</label>
                            </button>
                            <button class="nav-link  form-radio tab-style " id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-kurier" type="button" role="tab" aria-controls="nav-kurier"
                                    aria-selected="false">
                                <input id="kurier" type="radio" name="transport">
                                <label for="kurier">Курьер</label>
                            </button>
                            <button class="nav-link form-radio tab-style" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-pochta" type="button" role="tab" aria-controls="nav-pochta"
                                    aria-selected="false">
                                <input id="pochta" type="radio" name="transport">
                                <label for="pochta">Почта России</label>
                            </button>
                            <button class="nav-link form-radio tab-style" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-sam" type="button" role="tab" aria-controls="nav-sam"
                                    aria-selected="false">
                                <input id="samovyvoz" type="radio" name="transport">
                                <label for="samovyvoz">Самовывоз</label>

                            </button>
                        </div>
                    </nav>
                    <!--пункт выдачи-->
                    <div class="tab-content account-window-tab font-size" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-punct" role="tabpanel"
                             aria-labelledby="nav-punct-tab" tabindex="0">
                            <div class="cart-main-info-transport-container ">

<!--                                <div id="forpvz" style="height:600px; width: 100%;"></div>-->

                                <div class="punct-container">
                                    <img class="cart-main-info-transport-pochta-img" src="./img/sdek.png" alt="Почта">
                                    <div class="punct-info row">
                                        <div class="punct-info-input col-12 col-sm-4">
                                            <span class="cart-main-info-transport-pochta-title">Город</span>
                                            <input type="text" class="input-text" id="input-city">
                                        </div>
                                        <div class="punct-info-input col-12 col-sm-8">
                                            <span class="cart-main-info-transport-pochta-title">Адрес</span>
                                            <input type="text" class="input-text" id="input-address">
                                        </div>
                                        <select class="form-select font-size" aria-label="Default select example">
                                            <option selected>Выбрать из списка</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="index-map-container">
                                    <script type="text/javascript" charset="utf-8" async
                                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12a28fdfd081eecee5164ff1bdc84e052018809e0837596b9275fc0e1e98c40a&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                                </div>

                            </div>
                        </div>
                        <!--курьер-->
                        <div class="tab-pane fade" id="nav-kurier" role="tabpanel" aria-labelledby="nav-kurier-tab"
                             tabindex="0">
                            <div class="cart-main-info-transport-container">
                                <img class="cart-main-info-transport-pochta-img" src="./img/sdek.png" alt="Почта">
                                <div class="punct-info row">
                                    <div class="punct-info-input ccol-12 col-sm-6">
                                        <span class="cart-main-info-transport-pochta-title ">Город</span>
                                        <input type="text" class="input-text" id="input-city">
                                    </div>
                                    <div class="punct-info-input col-12 col-sm-6">
                                        <span class="cart-main-info-transport-pochta-title ">Индекс</span>
                                        <input type="text" class="input-text" id="input-index">
                                    </div>
                                    <div class="punct-info-input col-12">
                                        <span class="cart-main-info-transport-pochta-title ">Адрес</span>
                                        <input type="text" class="input-text" id="input-address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--почта россии-->
                        <div class="tab-pane fade" id="nav-pochta" role="tabpanel" aria-labelledby="nav-pochta-tab"
                             tabindex="0">
                            <div class="cart-main-info-transport-container">
                                <img class="cart-main-info-transport-pochta-img" src="./img/pochta.png" alt="Почта">
                                <div class="punct-info row">
                                    <div class="punct-info-input ccol-12 col-sm-6">
                                        <span class="cart-main-info-transport-pochta-title ">Город</span>
                                        <input type="text" class="input-text" id="input-city2">
                                    </div>
                                    <div class="punct-info-input col-12 col-sm-6">
                                        <span class="cart-main-info-transport-pochta-title ">Индекс</span>
                                        <input type="text" class="input-text" id="input-index2">
                                    </div>
                                    <div class="punct-info-input col-12">
                                        <span class="cart-main-info-transport-pochta-title ">Адрес</span>
                                        <input type="text" class="input-text" id="input-address2">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--самовывоз-->
                        <div class="tab-pane fade" id="nav-sam" role="tabpanel" aria-labelledby="nav-sam-tab"
                             tabindex="0">
                            <div class="cart-main-info-transport-container">
                                <span class="cart-main-info-transport-sam-title">Забрать самостоятельно по адресу:</span>
                                <a class="cart-main-info-transport-sam-address"
                                   href="https://yandex.ru/maps/-/CCUN5XTsDC">г. Санкт-Петербург, ул. Садовая, д.67</a>
                                <div class="index-map-container">
                                    <script type="text/javascript" charset="utf-8" async
                                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12a28fdfd081eecee5164ff1bdc84e052018809e0837596b9275fc0e1e98c40a&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-main-info-payment">
                    <span class="index-h index-map-h pod-h3">Оплата</span>
                    <div class="cart-main-info-payment-container">
                        <div class="cart-main-info-payment-radio form-radio">
                            <input id="online" type="radio" name="payment" checked>
                            <label for="online">Онлайн</label>
                        </div>
                        <div class="cart-main-info-payment-radio form-radio">
                            <input id="offline" type="radio" name="payment">
                            <label for="offline">При получении</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-main-form col-lg-4">
                <div class="cart-main-form-main cart-main-form-container">
                    <span class="cart-main-form-main-h form-1">Итого</span>
                    <span class="cart-main-form-main-price form-2"><?php
                        if (isset($_SESSION['cart.sum'])) {
                            echo $_SESSION['cart.sum'];
                        } else {
                            echo 0;
                        }
                        ?>&nbsp;</span>
                </div>


                <div class="cart-main-form-transport cart-main-form-container">
                    <span class="cart-main-form-transport-span form-1">Доставка</span>
                    <!--когда доставка еще не выбрана-->
                    <a href="#transport" class="cart-main-form-transport-link form-2">Выбрать адрес</a>

                    <!--когда доставка выбрана
                     <span class="cart-main-form-transport-number form-2">145&nbsp;</span>
                -->
                </div>
                <div class="cart-main-form-count cart-main-form-container">
                    <span class="cart-main-form-count-span form-1">Количество</span>
                    <span class="cart-main-form-count-number form-2"><?php
                        if (isset($_SESSION['cart.qty'])) {
                            echo $_SESSION['cart.qty'];
                        } else {
                            echo 0;
                        }
                        ?> шт.</span>
                </div>
                <button class="cart-main-form-btn pod-btn send-order">Оформить заказ</button>

                <div class="err-zone"></div>

                <div class="cart-main-form-check">
                    <input type="checkbox">
                    <label for="politic">Cогласен с <a class="politic" href="#">политикой обработки персональных
                            данных</a></label>
                </div>
            </div>
        </div>
    </section>
    <section class="index-map ">
        <div class="index-map-contacts content ">
            <span class="index-h index-map-h pod-h3">Контакты</span>
            <div class="contacts-main-content-item cont-addr col-12  ">
                <span class="contacts-main-content-item-p">Адрес</span>
                <a class="contacts-main-content-item-span pod-body1 " target="_blank"
                   href="https://yandex.ru/maps/-/CCUN5XTsDC">г. Санкт-Петербург, ул.Садовая 67</a>
            </div>
            <div class="contacts-main-content-item cont-docs col-12 ">
                <span class="contacts-main-content-item-p">График работы</span>
                <span class="contacts-main-content-item-span pod-body1 ">10:00 - 19:00</span>
            </div>
            <div class="contacts-main-content-item cont-tel  col-12  ">
                <span class="contacts-main-content-item-p ">Отдел по работе с клиентами</span>
                <a class="contacts-main-content-item-span pod-body1 "
                   href="tel:+7(999)999-99-99">+7(999)999-99-99</a>
            </div>
            <div class="contacts-main-content-item cont-mail1  col-12  ">
                <span class="contacts-main-content-item-p">Отдел по работе с клиентами</span>
                <a class="contacts-main-content-item-span pod-body1 "
                   href="mailto:surname@domen.ru">surname@domen.ru</a>
            </div>
        </div>
        <div class="index-map-container">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12a28fdfd081eecee5164ff1bdc84e052018809e0837596b9275fc0e1e98c40a&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </section>

</main>


