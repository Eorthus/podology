<?php

/* @var $this yii\web\View */

$this->title = 'Клиника подологии';
?>
<main>
    <section class="header-container content section0">
        <div class="header-slider">
            <div class="header-slider-slide">
                <div class="header-slider-slide-info">
            <span class="header-slider-slide-info-h pod-h3"> <span
                    class="header-slider-slide-info-h-color">КЛИНИКА ПОДОЛОГИИИ</span></span>
                    <span class="header-slider-slide-info-p font-size">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, dolor enim facere soluta optio ipsum eaque modi hic repellendus, perferendis aliquid asperiores necessitatibus repellat cupiditate, iste aspernatur temporibus at reiciendis.</span>
                    <button class=" pod-btn  header-slider-slide-info-btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Заказать звонок
                    </button>
                </div>
            </div>
        </div>
        <div class="header-banner">
            <img src="./img/back13.png" alt="banner">
            
        </div>
    </section>
    <section class="index-about content">
        <span class="index-h index-about-h pod-h3">О клинике</span>
        <span class="index-about-p font-size">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit eaque earum accusamus maiores quaerat eius debitis repudiandae necessitatibus pariatur deserunt distinctio doloremque, dolorem beatae amet delectus quos laborum adipisci! Cupiditate?</span>
        <span class="index-about-p font-size">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit eaque earum accusamus maiores quaerat eius debitis repudiandae necessitatibus pariatur deserunt distinctio doloremque, dolorem beatae amet delectus quos laborum adipisci! Cupiditate? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam natus rem iste quis voluptatum pariatur fuga laborum aut dolorem, distinctio sint dolor omnis aliquam ipsam voluptate accusantium, facilis ea vitae.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illo accusamus enim praesentium ex. Quod tenetur, incidunt rem voluptatibus quidem minima quibusdam voluptatem, fugiat perspiciatis expedita distinctio ratione aliquid temporibus!</span>
        <span class="index-about-p font-size">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit eaque earum accusamus maiores quaerat eius debitis repudiandae necessitatibus pariatur deserunt distinctio doloremque, dolorem beatae amet delectus quos laborum adipisci! Cupiditate?</span>
    </section>
    <section class="index-doctor content">
        <span class="index-h index-doctor-h pod-h3">Главный врач</span>
        <div class="index-doctor-flex row">
            <div class="index-doctor-left col-md-7">
                <ul class="index-doctor-list font-size">
                    <li class="index-doctor-list-li  row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"> <span>Lorem ipsum dolor sit amet consectetur.
      </span></div>
                    </li>
                    <li class="index-doctor-list-li   row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate</span>
                        </div>
                    </li>
                    <li class="index-doctor-list-li  row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"> <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, ullam voluptas inventore incidunt quisquam quos sed.
         </span></div>
                    </li>
                    <li class="index-doctor-list-li  row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, explicabo optio eius commodi</span>
                        </div>
                    </li>
                </ul>
                <button class="index-doctor-btn pod-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Получить консультацию
                </button>
            </div>
            <div class="index-doctor-right col-md-5">
                <div class="index-doctor-img">
                    <img src="./img/doctor.jpg" alt="doctor">
                    <!--photo from <a href='https://ru.freepik.com/photos/people'>People фото создан(а) wirestock - ru.freepik.com</a>-->
                </div>
                <span class="index-doctor-title font-size">Анна Каренина</span>
            </div>
        </div>
    </section>
    <section class="index-benefits content">
        <span class="index-h index-benefits-h pod-h3">Наши преимущества</span>
        <div class="index-benefits-list font-size">
            <ul class="index-benefits-list-ul row seo-body1 ">
                <li class="index-benefits-list-ul-li col-md-6 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/benefit1.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Всегда низкие цены и скидки</span>
                </li>
                <li class="index-benefits-list-ul-li col-md-6 col-lg-3 ">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/benefit4.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Новейшие технологии</span>
                </li>
                <li class="index-benefits-list-ul-li col-md-6 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/benefit8.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Индивидуальный подход</span>
                </li>
                <li class="index-benefits-list-ul-li col-md-6 col-lg-3">
                    <div class="index-benefits-list-ul-li-img"><img src="./img/benefit10.png" alt="item"></div>
                    <span class="index-benefits-list-ul-li-span">Квалифицированные врачи</span>
                </li>
            </ul>
        </div>
    </section>
    <section class="index-prices content ">
        <span class="index-prices-h2 index-h pod-h3">Услуги</span>
        <ul class="index-prices-gallery row font-size">
            <?php
            $services = \app\models\db\Services::find()->asArray()->all();

            foreach ($services as $service){
            ?>
            <li class="col-12 col-sm-6 col-xxl-4">
                <a href="#!">
                    <img src="<?=$service['image']?>" alt="price1">
                    <div class="index-prices-gallery-price">
                        <p class="index-prices-gallery-price-p"><?=$service['name']?></p>
                        <p class="index-prices-gallery-price-p">от
                            <span class="index-prices-gallery-price-p-span">
                          <?=$service['price']?>
                      </span>
                        </p>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
        <a class="index-prices-button pod-btn font-size" href="index.php?r=site/diseases">Подробнее</a>
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
                <a class="contacts-main-content-item-span pod-body1 " href="mailto:surname@domen.ru">surname@domen.ru</a>
            </div>
        </div>
        <div class="index-map-container">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12a28fdfd081eecee5164ff1bdc84e052018809e0837596b9275fc0e1e98c40a&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </section>
    <section class="index-feedback content">
        <div style="max-width:560px;height:800px;overflow:hidden;position:relative;margin:auto">
            <iframe style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"
                    src="https://yandex.ru/maps-reviews-widget/110245053573?comments"></iframe>
            <a href="https://yandex.ru/maps/org/uchet_tovarov_i_kliyentov_studiya_web_razrabotki_mastervisor_ru/110245053573/"
               target="_blank"
               style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Учет
                товаров и клиентов, студия web разработки Mastervisor.ru на карте Санкт‑Петербурга —
                Яндекс Карты</a></div>
    </section>
</main>
