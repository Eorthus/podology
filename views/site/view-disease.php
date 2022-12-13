<?php
$this->title = $data->name;
?>
<main>
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
        <span class="index-h index-about-h pod-h3">О Заболевании</span>
        <span class="index-about-p font-size">
            <?=nl2br($data->about)?>
        </span>
    </section>
    <section class="index-grow">
        <div class="index-grow-bottom crm-bottom support-container support-bottom content">
            <div class="index-grow-bottom-box ">
                <span class="index-grow-h index-h pod-h3">Симптомы</span>
            </div>
            <div class="index-grow-list">
                <ul class="index-grow-list-ul row pod-body2 ">

                    <?php
                    $i    = 1;
                    $stop = 6;

                    while ($i < $stop) {
                        ?>
                        <li class="index-grow-list-ul-li col-12 ">
                            <div class="index-doctor-list-li-number col-1"><span><?=$i?></span></div>
                            <span class="index-grow-list-ul-li-span">
                            <?=$data['symptoms_arr']?>
                        </span>
                        </li>
                        <?php $i++;
                    } ?>
                </ul>
            </div>
    </section>
    <section class="index-doctor ill_card-doctor content">
        <span class="index-h index-doctor-h pod-h3">Лечащий врач</span>
        <div class="index-doctor-flex row">
            <div class="index-doctor-left col-md-7">
                <ul class="index-doctor-list font-size">
                    <li class="index-doctor-list-li  row">
                        <div class="index-doctor-list-li-text col-9"> <span>Lorem ipsum dolor sit amet consectetur.
                  </span></div>
                    </li>
                    <li class="index-doctor-list-li   row">
                        <div class="index-doctor-list-li-text col-9"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate</span>
                        </div>
                    </li>
                    <li class="index-doctor-list-li  row">
                        <div class="index-doctor-list-li-text col-9"> <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, ullam voluptas inventore incidunt quisquam quos sed.
                     </span></div>
                    </li>
                    <li class="index-doctor-list-li  row">
                        <div class="index-doctor-list-li-text col-9"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, explicabo optio eius commodi</span>
                        </div>
                    </li>
                </ul>
                <button class="index-doctor-btn pod-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Получить
                    консультацию
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
    <section class="doctors-staff illness-cards ill_card-tech content">
        <span class="index-h doctors-staff-h pod-h3">Оборудование</span>
        <ul class="doctors-staff-container row">

            <?php
            $eqps = \app\models\db\Equipments::find()->asArray()->all();

            foreach ($eqps as $eqp) {
                ?>
                <li class="doctors-staff-card col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <div class="doctors-staff-card-container">
                        <div class="doctors-staff-card-img">
                            <img src="<?=$eqp['image']?>" alt="doctor">
                        </div>
                        <div class="doctors-staff-card-info">
                            <span class="doctors-staff-card-name"><?=$eqp['name']?></span>
                            <span class="doctors-staff-card-work"><?=$eqp['description']?></span>
                        </div>
                    </div>
                </li>
            <?php } ?>

        </ul>
    </section>
    <section class="index-about content ill_card-method">
        <span class="index-h index-about-h pod-h3">Метод лечения</span>
        <span class="index-about-p font-size">
            <?=nl2br($data->treatment_method)?>
        </span>
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
</main>