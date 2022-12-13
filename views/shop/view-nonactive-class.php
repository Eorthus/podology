<?php

/* @var $this yii\web\View */

$this->title = 'Препарат';
?>
<main>
<a href="index.php?r=shop/category" class="content view-back font-size">&#8592;<span class="">Назад</span> </a>

<section class="view-main content row font-size nonactive-card">
<span class="nonactive-card-info">Товар<br>закончился</span>
    <div class="view-main-left col-12 col-md-6">

        <div class="view-main-slider slider-for">
            <img src="./img/pills.jpg" alt="Препарат" data-fancybox="view-main-img1">
            <img src="./img/cat4.jpg" alt="Препарат" data-fancybox="view-main-img1">
            <img src="./img/cat5.jpg" alt="Препарат" data-fancybox="view-main-img1">
        </div>
        <div class="view-main-slider slider-nav">
            <img src="./img/pills.jpg" alt="Препарат">
            <img src="./img/cat4.jpg" alt="Препарат">
            <img src="./img/cat5.jpg" alt="Препарат">
        </div>
    </div>
    <div class="view-main-right col-12 col-md-6">
    <a href="#gift"> <img  class="view-main-present" src="./img/gift.png" alt="Подарок"></a>
        <span class="view-main-title pod-h3">Препарат</span>
        <span class="view-main-articul">Артикул: 12342</span>
        <a class="view-main-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laborum nisi, aliquid quia atque quo nostrum sint accusamus! Eveniet commodi, voluptates pariatur illum magnam quas ullam reiciendis voluptatibus impedit aut?</a>
        <span class="view-main-price pod-h3">1234&nbsp;</span>
       <div class="view-main-count">
       <div class="cart-main-info-orders-count">
                <button class="count-minus pod-btn">-</button>
                <input type="text" value="1">
                <button class="count-plus pod-btn">+</button>
            </div>
       </div> 
        <button class="view-main-btn pod-btn">Добавить в корзину</button>
    </div>
</section>
<section class="index-doctor index-about content view-about">
        <span class="index-h index-about-h pod-h3">О товаре</span>
        <span class="index-about-p font-size">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit eaque earum accusamus maiores quaerat eius debitis repudiandae necessitatibus pariatur deserunt distinctio doloremque, dolorem beatae amet delectus quos laborum adipisci! Cupiditate?</span>
        <span class="index-about-p font-size">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit eaque earum accusamus maiores quaerat eius debitis repudiandae necessitatibus pariatur deserunt distinctio doloremque, dolorem beatae amet delectus quos laborum adipisci! Cupiditate? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam natus rem iste quis voluptatum pariatur fuga laborum aut dolorem, distinctio sint dolor omnis aliquam ipsam voluptate accusantium, facilis ea vitae.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam illo accusamus enim praesentium ex. Quod tenetur, incidunt rem voluptatibus quidem minima quibusdam voluptatem, fugiat perspiciatis expedita distinctio ratione aliquid temporibus!</span>
        <ul class="index-doctor-list font-size col-md-10">
                    <li class="index-doctor-list-li  row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"> <span>Состояние: <span class="view-status">Новый</span>
      </span></div>
                    </li>
                    <li class="index-doctor-list-li   row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"> <span>Количество на складе: <span class="view-status">812 шт.</span>
                          </div>
                    </li>
                    <li class="index-doctor-list-li  row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"> <span>Год выпуска: <span class="view-status">12.12.1212</span>
                          </span></div>
                    </li>
                    <li class="index-doctor-list-li  row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"> <span>Состав: <span class="view-status">препарат, препарат, препарат, препарат</span>
                               </div>
                    </li>
                    <li class="index-doctor-list-li  row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"> <span>Срок годности: <span class="view-status">3 мес.</span>
                               </div>
                    </li>
                    <li class="index-doctor-list-li  row">
                        <!--  <div class="index-doctor-list-li-number col-1"><span>1</span></div>-->
                        <div class="index-doctor-list-li-text col-9"> <span>Габариты: <span class="view-status">25*25*25 см</span>
                               </div>
                    </li>
                </ul>
    <a class="view-about-present" id="gift" href="index.php?r=shop/view">
    <img src="./img/gift.png" alt="Подарок">
        <span class="view-about-present-title">Подарок при покупке:&nbsp;
            <span class="view-gift">Препарат</span>
        </span>
 
</a>
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


