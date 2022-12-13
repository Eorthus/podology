<?php
$this->title = $data->name;
?>
<main class="change-color">
    <section class="header-container  ill_card-banner">
        <div class="header-slider content">
            <div class="header-slider-slide">
                <div class="header-slider-slide-info">
                <span class="header-slider-slide-info-h pod-h3">
                    <span class="header-slider-slide-info-h-color">
                        <?=$data->name?>
                    </span>
                </span>
                    <span class="header-slider-slide-info-p font-size">
                        <?=$data->description?>
                        <br>
                    </span>
                    <span class="header-slider-slide-info-price">от <span><?=$data->price?></span> руб.</span>
                    <button class=" pod-btn  header-slider-slide-info-btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Записаться
                    </button>
                </div>
            </div>
            </div>
        <div class="header-banner">
            <img src="<?=$data->image?>" alt="banner">
            
        </div>
    </section>
    <section class="index-about content">
        <span class="index-h index-about-h pod-h3">О курсе</span>
        <span class="index-about-p font-size">
            <?=nl2br($data->about)?>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus deserunt hic officiis ex, fugiat, facilis ab dolores vitae reprehenderit quaerat nemo aliquam debitis sequi esse assumenda fuga error odio mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia et rerum similique libero animi distinctio iste, eveniet id laborum, repellat tempora ex tenetur, perferendis cupiditate nesciunt? Nulla provident temporibus laborum.
            <br><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi autem facere dicta vitae saepe necessitatibus consequuntur voluptatum ab repellendus, voluptatibus ipsam! Laudantium voluptate laboriosam ad aperiam dolorem commodi? Ab, quasi!
        </span>
    </section>
 
    <section class="index-doctor school-doctor course-card-doctor content">
        <span class="index-h index-doctor-h pod-h3">Курирующий врач</span>
        <div class="index-doctor-flex row">
            <div class="index-doctor-left col-md-7 row">
            <span class="font-size index-doctor-speach col-10">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi itaque neque modi, commodi eligendi magnam numquam fugiat nisi, sit quos omnis, officia asperiores est quas minima praesentium in deserunt excepturi!
                <br> <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi saepe ducimus in totam nemo fuga quis adipisci? Nesciunt voluptas eligendi pariatur totam! Expedita, earum pariatur accusamus magnam optio illo nesciunt."</span>
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
                <button class="index-doctor-btn pod-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Записаться
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
    <section class="index-grow course-card-program">
        <div class="index-grow-bottom crm-bottom support-container support-bottom content ">
            <div class="index-grow-bottom-box ">
                <span class="index-grow-h index-h pod-h3">Программа</span>
            </div>
            <div class="index-grow-list">
                <ul class="index-grow-list-ul row pod-body2 ">
                        <li class="index-grow-list-ul-li col-12 ">
                            <span class="index-grow-list-ul-li-span">
                        Модуль 1
                        </span>
                        <span class="index-grow-list-ul-li-info col-9">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat maxime quibusdam reprehenderit cum quo! Animi ratione autem ipsum minus esse eaque asperiores placeat atque et quaerat! Ipsa tenetur illum laborum?
                        </span>
                        </li>
                        <li class="index-grow-list-ul-li col-12 ">
                            <span class="index-grow-list-ul-li-span">
                        Модуль 2
                        </span>
                        <span class="index-grow-list-ul-li-info col-9">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat maxime quibusdam reprehenderit cum quo! Animi ratione autem ipsum minus esse eaque asperiores placeat atque et quaerat! Ipsa tenetur illum laborum?
                        </span>
                        </li>
                        <li class="index-grow-list-ul-li col-12 ">
                            <span class="index-grow-list-ul-li-span">
                        Модуль 3
                        </span>
                        <span class="index-grow-list-ul-li-info col-9">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat maxime quibusdam reprehenderit cum quo! Animi ratione autem ipsum minus esse eaque asperiores placeat atque et quaerat! Ipsa tenetur illum laborum?
                        </span>
                        </li>
                        <li class="index-grow-list-ul-li col-12 ">
                            <span class="index-grow-list-ul-li-span">
                        Сертификат
                        </span>
                        <span class="index-grow-list-ul-li-info col-9">
                           </span>
                        </li>
                </ul>
            </div>
    </section>
      
    <section class="index-about content ill_card-method course-card-video">
        <span class="index-h index-about-h pod-h3">Видеоотзыв</span>
        <div class="videoPlayer">
    <iframe class="video" src="https://www.youtube.com/embed/o_OrXVbEcwo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
    <button class="index-doctor-btn pod-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Записаться
                </button>
    </section>
    <section class="index-doctor content course-card-sert">
        <span class="index-h index-doctor-h pod-h3">Сертификат</span>
        <div class="index-doctor-flex row">
            <div class="index-doctor-left col-md-6">
                <span class="index-doctor-list font-size">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab natus, culpa voluptatem facilis optio dicta sit enim similique nesciunt quae aut ratione quia est deserunt inventore expedita voluptate delectus nobis.</span>
            </div>
            <div class="index-doctor-right forfancy col-md-6">
                <div class="index-doctor-img" >
                    <a href="./img/sert1.jpg"  data-fancybox="school-sert-1">
                    <img src="./img/sert1.jpg" alt="doctor">
                           </a>
    </div>
             
    </div>
        </div>
    </section>

    <section class="course-btn">

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
                       href="https://yandex.ru/maps/-/CCUN5XTsDC">г. Санкт-Петербург, ул. Садовая 67</a>
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