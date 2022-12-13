<?php
$this->title = 'Контакты';
?>
<main>
    <section class="contacts-main content">
        <div class="contacts-main-container">
            <span class="contacts-main-h pod-h3">Контакты</span>
            <div class="contacts-main-content pod-body2 row ">
                <div class="contacts-main-content-item cont-tel  col-12 col-md-6 col-xxl-4">
                    <span class="contacts-main-content-item-p ">Отдел по работе с клиентами</span>
                    <a class="contacts-main-content-item-span pod-body1 "
                       href="tel:+7(999)999-99-99">+7(999)999-99-99</a>
                </div>
                <div class="contacts-main-content-item cont-mail1  col-12 col-md-6 col-xxl-4">
                    <span class="contacts-main-content-item-p">Отдел по работе с клиентами</span>
                    <a class="contacts-main-content-item-span pod-body1 " href="mailto:surname@domen.ru">surname@domen.ru</a>
                </div>
                <div class="contacts-main-content-item cont-docs col-12 col-md-6 col-xxl-4">
                    <span class="contacts-main-content-item-p">График работы</span>
                    <span class="contacts-main-content-item-span pod-body1 ">10:00 - 19:00</span>
                </div>
                <div class="contacts-main-content-item cont-docs  col-12 col-md-6 col-xxl-4">
                    <span class="contacts-main-content-item-p">Юридические данные</span>
                    <span class="contacts-main-content-item-span pod-body1 ">ОГРНИП: 317774600429122<br>ИНН: 507463197350</span>
                </div>
                <div class="contacts-main-content-item cont-addr col-12 col-md-6 col-xxl-4">
                    <span class="contacts-main-content-item-p">Адрес</span>
                    <a class="contacts-main-content-item-span pod-body1 " target="_blank"
                       href="https://yandex.ru/maps/-/CCUN5XTsDC">г. Санкт-Петербург, ул.Садовая 67</a>
                </div>
                <div class="contacts-main-content-item cont-inst  col-12 col-md-6 col-xxl-4">
                    <span class="contacts-main-content-item-p">Мы в соцсетях</span>
                    <div class="contacts-main-content-item-flex">
                        <a class="contacts-main-content-item-span pod-body1 " href="#">
                            <img src="./img/telegram.png" alt="instagram">
                        </a>
                        <a class="contacts-main-content-item-span pod-body1 " href="#">
                            <img src="./img/whatsapp.png" alt="instagram">
                        </a>
                        <a class="contacts-main-content-item-span pod-body1 " href="#">
                            <img src="./img/inst.png" alt="instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts-map">
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12a28fdfd081eecee5164ff1bdc84e052018809e0837596b9275fc0e1e98c40a&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
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
</main>
