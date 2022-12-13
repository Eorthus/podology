<?php

/* @var $this yii\web\View */

$this->title = 'Препарат';
?>
<main>
    <a href="index.php?r=shop/category" class="content view-back font-size">&#8592;<span class="">Назад</span> </a>

    <section class="view-main content row font-size">

        <div class="view-main-left col-12 col-md-6">
            <div class="view-main-slider slider-for">
                <?php
                if (isset($product['image']) && mb_strlen($product['image']) > 1) {
                    echo "<img src='{$product['image']}' data-fancybox='view-main-img1'>";
                }
                ?>
                <?php
                if (isset($product['image_2']) && mb_strlen($product['image_2']) > 1) {
                    echo "<img src='{$product['image_2']}' data-fancybox='view-main-img1'>";
                }
                ?>
                <?php
                if (isset($product['image_3']) && mb_strlen($product['image_3']) > 1) {
                    echo "<img src='{$product['image_3']}' data-fancybox='view-main-img1'>";
                }
                ?>
            </div>
            <div class="view-main-slider slider-nav">
                <?php
                if (isset($product['image']) && mb_strlen($product['image']) > 1) {
                    echo "<img src='{$product['image']}'>";
                }
                ?>
                <?php
                if (isset($product['image_2']) && mb_strlen($product['image_2']) > 1) {
                    echo "<img src='{$product['image_2']}'>";
                }
                ?>
                <?php
                if (isset($product['image_3']) && mb_strlen($product['image_3']) > 1) {
                    echo "<img src='{$product['image_3']}'>";
                }
                ?>
            </div>
        </div>
        <div class="view-main-right col-12 col-md-6">
            <?php if (isset($product['gift_id']) && $product['gift_id'] != 0) { ?>
                <a href="#gift">
                    <img class="view-main-present" src="./img/gift.png" alt="Подарок">
                </a>
            <?php } ?>
            <span class="view-main-title pod-h3">
                <?=$product['title']?>
            </span>
            <span class="view-main-articul">
                Артикул: <?=$product['acrticle']?>
            </span>
            <p class="view-main-about" style="text-align: justify">
                <?=$product['small_description']?>
            </p>
            <span class="view-main-price pod-h3"><?=$product['price']?>&nbsp;</span>
            <div class="view-main-count">
                <div class="cart-main-info-orders-count">
                    <button class="count-minus pod-btn">-</button>
                    <input type="text" value="1">
                    <button class="count-plus pod-btn">+</button>
                </div>
            </div>
            <button class="view-main-btn pod-btn" data-id="<?=$product['id']?>">Добавить в корзину</button>
        </div>
    </section>
    <section class="index-doctor index-about content view-about">
        <span class="index-h index-about-h pod-h3">О товаре</span>
        <span class="index-about-p font-size" style="text-align: justify">
            <?=$product['description']?>
        </span>
        <ul class="index-doctor-list font-size col-md-10">
            <?php
            $params = [
                'Страна'            => $product['country'],
                'Производитель'     => $product['manufacturer'],
                'Упаковка'          => $product['packaging'],
                'Фасовка'           => $product['packaging_fas'],
                'Вес'               => $product['weight'],
                'Габариты'          => $product['gab_a'] . 'x' . $product['gab_b'] . 'x' . $product['gab_c'],
                'Срок годности'     => $product['expiration_date'],
                'Остаток на складе' => $product['count'] . ' шт.',
            ];

            foreach ($params as $param_label => $param) {
                if (isset($param) && mb_strlen($param) > 0) { ?>
                    <li class="index-doctor-list-li row">
                        <div class="index-doctor-list-li-text col-9">
                            <span><?=$param_label?>: <span class="view-status"><?=$param?></span></span>
                        </div>
                    </li>
                <?php }
            }
            ?>
        </ul>

        <?php if (isset($product['gift_id']) && $product['gift_id'] != 0) {
            $gift = \app\models\db\Products::find()->where(['id' => $product['gift_id']])->one();
            ?>
            <a class="view-about-present" id="gift" href="index.php?r=shop/view&id=<?=$gift->id?>" target="_blank">
                <img src="./img/gift.png" alt="Подарок">
                <span class="view-about-present-title">Подарок при покупке:&nbsp;
                        <span class="view-gift"><?=$gift->title?></span>
                    </span>
            </a>
        <?php } ?>

    </section>
    <section class="index-benefits content view-pay">
        <span class="index-h index-benefits-h pod-h3">Варианты оплаты</span>
        <div class="index-benefits-list font-size ">
            <ul class="index-benefits-list-ul row seo-body1 ">
                <li class="index-benefits-list-ul-li col-sm-6 col-md-4 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/pay1.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Банковская карта</span>
                    <!--icons from icons8.ru-->
                </li>

                <li class="index-benefits-list-ul-li col-sm-6 col-md-4 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/pay3.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Онлайн кошелек</span>
                    <!--icons from icons8.ru-->
                </li>
                <li class="index-benefits-list-ul-li col-sm-6 col-md-4 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/pay4.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">SberPay</span>
                    <!--icons from icons8.ru-->
                </li>
                <li class="index-benefits-list-ul-li col-sm-6 col-md-4 col-lg-3 ">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/pay5.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">СБП</span>
                    <!--icons from icons8.ru-->
                </li>
                <li class="index-benefits-list-ul-li col-sm-6 col-md-4 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/pay6.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Наличные</span>
                    <!--icons from icons8.ru-->
                </li>
                <li class="index-benefits-list-ul-li col-sm-6 col-md-4 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/pay7.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Счёт на оплату</span>
                    <!--icons from icons8.ru-->
                </li>
                <li class="index-benefits-list-ul-li col-sm-6 col-md-4 col-lg-3 ">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/pay2.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">B2B</span>
                    <!--icons from icons8.ru-->
                </li>
            </ul>
        </div>
    </section>

    <section class="index-doctor index-about content view-transport">
        <span class="index-h index-about-h pod-h3">Варианты доставки</span>
        <ul class="view-transport-ul font-size row">
            <li class="view-transport-ul-li col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="./img/sdek.png" alt="sdek">
            </li>
            <li class="view-transport-ul-li col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="./img/pochta.png" alt="pochta">
            </li>
            <li class="view-transport-ul-li col-12 col-sm-6 col-md-4 col-lg-3">

                <img src="./img/transport.png" alt="samovyvoz">
            </li>
        </ul>
    </section>
    <section class="doctors-staff school-otzyvi illness-cards content shop-orders category-orders">
        <span class="index-h doctors-staff-h pod-h3">Рекомендуем</span>
        <ul class="shop-orders-slider font-size">
            <li class="doctors-staff-card col-12 col-md-6 col-xxl-4">
                <a class="doctors-staff-card-container" href="#">
                    <div class="doctors-staff-card-img">
                        <img src="./img/cat4.jpg" alt="card">
                    </div>
                    <div class="doctors-staff-card-info">
                        <span class="doctors-staff-card-price">1234</span>
                        <span class="doctors-staff-card-name">Препарат</span>
                    </div>
                </a>
            </li>
            <li class="doctors-staff-card col-12 col-md-6 col-xxl-4">
                <a class="doctors-staff-card-container" href="#">
                    <div class="doctors-staff-card-img">
                        <img src="./img/cat3.jpg" alt="card">
                    </div>
                    <div class="doctors-staff-card-info">
                        <span class="doctors-staff-card-price">1234</span>
                        <span class="doctors-staff-card-name">Препарат</span>
                    </div>
                </a>
            </li>
            <li class="doctors-staff-card col-12 col-md-6 col-xxl-4">
                <a class="doctors-staff-card-container" href="#">
                    <div class="doctors-staff-card-img">
                        <img src="./img/cat2.jpg" alt="card">
                    </div>
                    <div class="doctors-staff-card-info">
                        <span class="doctors-staff-card-price">1234</span>
                        <span class="doctors-staff-card-name">Препарат очень длинное название</span>
                    </div>
                </a>
            </li>
            <li class="doctors-staff-card col-12 col-md-6 col-xxl-4">
                <a class="doctors-staff-card-container" href="#">
                    <div class="doctors-staff-card-img">
                        <img src="./img/cat5.jpg" alt="card">
                    </div>
                    <div class="doctors-staff-card-info">
                        <span class="doctors-staff-card-price">1234</span>
                        <span class="doctors-staff-card-name">Препарат</span>
                    </div>
                </a>
            </li>
            <li class="doctors-staff-card col-12 col-md-6 col-xxl-4">
                <a class="doctors-staff-card-container" href="#">
                    <div class="doctors-staff-card-img">
                        <img src="./img/pills.jpg" alt="card">
                    </div>
                    <div class="doctors-staff-card-info">
                        <span class="doctors-staff-card-price">1234</span>
                        <span class="doctors-staff-card-name">Препарат</span>
                    </div>
                </a>
            </li>
        </ul>
    </section>

    <section class="contacts-feedback">
        <form class="contacts-feedback-form">
            <div class="contacts-feedback-form-left">
                <span class="contacts-feedback-form-h  pod-h3">Закажите обратный звонок</span>
                <div class="contacts-feedback-form-container">
                    <div class="contacts-feedback-form-container-top">
                        <p class="contacts-feedback-form-p">Имя</p>
                        <input class="contacts-feedback-form-input" type="text" autocomplete="off"
                               placeholder="Ваше имя">
                    </div>
                    <div class="contacts-feedback-form-container-top">
                        <p class="contacts-feedback-form-p">Телефон</p>
                        <input class="contacts-feedback-form-input phone" autocomplete="off" type="tel"
                               placeholder="+7(___) __-__">
                    </div>
                </div>
                <button class="contacts-feedback-form-btn pod-body2 pod-btn" data-bs-toggle="modal"
                        data-bs-target="#alertModal">Отправить
                </button>
            </div>
            <div class="contacts-feedback-form-right">
                <span class="contacts-feedback-contacts-p">Позвоните по номеру</span>
                <a class="contacts-feedback-contacts-phone" href="tel:+7(999)999-99-99">+7(925)322-22-32</a>
                <div class="contacts-feedback-contacts-messangers">
                    <a class="contacts-feedback-contacts-messangers-a" href="#">
                        <img src="./img/whatsappblack.png" alt="whatsapp">
                    </a>
                    <a class="contacts-feedback-contacts-messangers-a" href="#">
                        <img src="./img/tgblack.png" alt="telegram">
                    </a>
                    <a class="contacts-feedback-contacts-messangers-a" href="#">
                        <img src="./img/instagramblack.png" alt="instagram">
                    </a>
                </div>
                <div class="contacts-address">
                    <span class="contacts-feedback-contacts-p">Или приходите к нам</span>
                    <a class="contacts-feedback-contacts-phone" target="_blank"
                       href="https://yandex.ru/maps/-/CCUN5XTsDC">

                        Санкт-Петербург, ул.&nbsp;Садовая&nbsp;67</a>
                    <span class="contacts-feedback-contacts-p">10:00-19:00</span>
                </div>
            </div>
        </form>
    </section>
    <section class="contacts-map">
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12a28fdfd081eecee5164ff1bdc84e052018809e0837596b9275fc0e1e98c40a&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
    </section>
</main>


