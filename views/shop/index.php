<?php

/* @var $this yii\web\View */

use app\models\db\Categories;
use app\models\db\ShopUpBanners;
use app\models\logical\GetData;

$this->title = 'Магазин';
?>
<main>
    <section class="shop-panel">
        <div class="shop-menu col-3 pod-body1 content">
            <ul class="shop-menu-ul">
                <?php
                $categories = Categories::find()
                    ->where(['parent_id' => 0])
                    ->asArray()
                    ->all();

                foreach ($categories as $category) { ?>
                    <li class="shop-menu-ul-li">
                        <a href="index.php?r=shop/category&id=<?=$category['id']?>">
                            <img src="./img/menu1.png" alt="menu item">
                            <span class="shop-menu-ul-li-title"><?=$category['title']?></span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="shop-slider col-12 col-lg-9">
            <?php
            $banners = ShopUpBanners::find()->asArray()->all();

            foreach ($banners as $banner){ ?>
            <div class="header-container  ill_card-banner">
                <div class="header-slider content">
                    <div class="header-slider-slide">
                        <div class="header-slider-slide-info">
                            <span class="header-slider-slide-info-h pod-h3">
                                <span class="header-slider-slide-info-h-color">
                                <?=$banner['title']?>
                                </span>
                            </span>
                            <span class="header-slider-slide-info-p">
                                <?=$banner['content']?>
                                <br>
                            </span>

                            <?php if (isset($banner['price']) && mb_strlen($banner['price']) > 0){ ?>
                            <span class="header-slider-slide-info-price"><span><?=$banner['price']?></span> руб.</span>
                            <?php } ?>

                            <a class=" pod-btn  header-slider-slide-info-btn" style="line-height: 60px;"
                               href="index.php?r=shop/view">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-banner">
                    <img src="<?=$banner['image']?>" alt="banner">
                    
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <section class="index-about content">
        <span class="index-h index-about-h pod-h3">О магазине</span>
        <span class="index-about-p font-size">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit eaque earum accusamus maiores quaerat eius debitis repudiandae necessitatibus pariatur deserunt distinctio doloremque, dolorem beatae amet delectus quos laborum adipisci! Cupiditate?</span>
        <span class="index-about-p font-size">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit eaque earum accusamus maiores quaerat eius debitis repudiandae necessitatibus pariatur deserunt distinctio doloremque, dolorem beatae amet delectus quos laborum adipisci! Cupiditate? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam natus rem iste quis voluptatum pariatur fuga laborum aut dolorem, distinctio sint dolor omnis aliquam ipsam voluptate accusantium, facilis ea vitae.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illo accusamus enim praesentium ex. Quod tenetur, incidunt rem voluptatibus quidem minima quibusdam voluptatem, fugiat perspiciatis expedita distinctio ratione aliquid temporibus!</span>
    </section>
    <section class="index-prices content shop-cat">
        <span class="index-prices-h2 index-h pod-h3">Каталог</span>
        <ul class="index-prices-gallery row font-size">
            <?php
            foreach ($categories as $category) {
                ?>
                <li class="col-12 col-sm-6 col-xxl-4">
                    <a href="index.php?r=shop/category&id=<?=$category['id']?>">
                        <img src="<?=$category['images']?>" alt="price1">
                        <div class="index-prices-gallery-price">
                            <p class="index-prices-gallery-price-p"><?=$category['title']?></p>
                            <p class="index-prices-gallery-price-p">от
                                <span class="index-prices-gallery-price-p-span">
                                    <?=GetData::getMinimalPriceByCategory($category['id']);?>
                                </span>
                            </p>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </section>

    <section class="doctors-staff school-otzyvi illness-cards content shop-orders">
        <span class="index-h doctors-staff-h pod-h3">Актуальные товары</span>
        <ul class="shop-orders-slider font-size">

            <?php
            $actual_products = \app\models\db\Products::find()
                ->where(['in_carousel' => 1])
                ->asArray()
                ->all();

            foreach ($actual_products as $actual_product){
            ?>
            <li class="doctors-staff-card col-12 col-md-6 col-xxl-4">
                <a class="doctors-staff-card-container" href="index.php?r=shop/view">
                    <div class="doctors-staff-card-img">
                        <img src="<?=$actual_product['image']?>">
                    </div>
                    <div class="doctors-staff-card-info">
                        <span class="doctors-staff-card-price"><?=$actual_product['price']?></span>
                        <span class="doctors-staff-card-name"><?=$actual_product['title']?></span>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </section>
    <section class="index-benefits content">
        <span class="index-h index-benefits-h pod-h3">Преимущества магазина</span>
        <div class="index-benefits-list font-size ">
            <ul class="index-benefits-list-ul row seo-body1 ">
                <li class="index-benefits-list-ul-li col-md-6 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/oplata.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Онлайн оплата</span>
                    <!--icons from icons8.ru-->
                </li>
                <li class="index-benefits-list-ul-li col-md-6 col-lg-3 ">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/dsek.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Доставка курьером</span>
                    <!--icons from icons8.ru-->
                </li>
                <li class="index-benefits-list-ul-li col-md-6 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/stud.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Скидки выпускникам</span>
                    <!--icons from icons8.ru-->
                </li>
                <li class="index-benefits-list-ul-li col-md-6 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/opt.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Скидки за опт</span>
                    <!--icons from icons8.ru-->
                </li>
            </ul>
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

