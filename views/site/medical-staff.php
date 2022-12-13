<?php

use app\models\db\Doctors;

$this->title = 'Врачебный коллектив';
?>
<main>
    <section class="index-doctor content doctors-main">
        <span class="index-h index-doctor-h pod-h3">Главный врач</span>
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
    <section class="doctors-staff content">
        <span class="index-h doctors-staff-h pod-h3">Врачебный коллектив</span>
        <ul class="doctors-staff-container row">
            <?php
            $doctors = Doctors::find()->asArray()->all();

            foreach ($doctors as $doctor) {
                echo $this->render('_doctorCard', [
                    'doctor' => $doctor,
                ]);
            }
            ?>
        </ul>
    </section>
</main>
