<?php

/* @var $this yii\web\View */

use app\models\db\Categories;
use app\models\db\Products;
use app\models\db\ShopUpBanners;

$this->title = 'Обзор категории';
?>
<main>

    <section class="doctors-staff illness-cards content shop-orders category-list">
        <span class="index-h doctors-staff-h pod-h3">
            <?php
            if (isset($_GET['id'])){
                $id = htmlspecialchars($_GET['id']);
                echo Categories::getNameById($id);
            } else {
                echo "Поиск по запросу: " . htmlspecialchars($_GET['s']);
            }
            ?>
        </span>
        <ul class="doctors-staff-container row">

            <?php
            $count = 0;
            foreach ($products as $product) {
                $count++;

                if ($product['count'] > 0) {
                    echo $this->render('_productCard', [
                        'product' => $product,
                    ]);
                } else {
                    echo $this->render('_productCardInv', [
                        'product' => $product,
                    ]);
                }
            }

            if ($count == 0){
                echo "По данному запросу ничего не найдено";
            }
            ?>

        </ul>
    </section>

<!--    <nav aria-label="Page navigation example" class="content category-nav">-->
<!--        <ul class="pagination">-->
<!--            <li class="page-item">-->
<!--                <a class="page-link" href="#" aria-label="Previous">-->
<!--                    <span aria-hidden="true">&laquo;</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="page-item active"><a class="page-link " href="#">1</a></li>-->
<!--            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--            <li class="page-item">-->
<!--                <a class="page-link" href="#" aria-label="Next">-->
<!--                    <span aria-hidden="true">&raquo;</span>-->
<!--                </a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </nav>-->

    <section class="doctors-staff school-otzyvi illness-cards content shop-orders category-orders">
        <span class="index-h doctors-staff-h pod-h3">Актуальные товары</span>
        <ul class="shop-orders-slider font-size">
            <li class="doctors-staff-card col-12 col-md-6 col-xxl-4">
                <a class="doctors-staff-card-container" href="index.php?r=shop/view">
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
                <a class="doctors-staff-card-container" href="index.php?r=shop/view">
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
                <a class="doctors-staff-card-container" href="index.php?r=shop/view">
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
                <a class="doctors-staff-card-container" href="index.php?r=shop/view">
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
                <a class="doctors-staff-card-container" href="index.php?r=shop/view">
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


