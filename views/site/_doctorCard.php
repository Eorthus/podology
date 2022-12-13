<li class="doctors-staff-card col-12 col-md-6 col-xxl-4">
    <div class="doctors-staff-card-container">
        <div class="doctors-staff-card-img">
            <img src="./img/doctor2.jpg" alt="doctor">
            <!--photo from <a href='https://ru.freepik.com/photos/woman'>Woman фото создан(а) freepik - ru.freepik.com</a>-->
        </div>
        <div class="doctors-staff-card-info">
            <span class="doctors-staff-card-name"><?=$doctor['name']?></span>
            <span class="doctors-staff-card-work"><?=$doctor['specialization']?></span>
            <ul class="doctors-staff-card-ul font-size">
                <li class="doctors-staff-card-ul-li"><?=$doctor['small_description']?></li>
                <li class="doctors-staff-card-ul-li">Lorem upsum</li>
                <li class="doctors-staff-card-ul-li">Lorem upsum</li>
            </ul>

            <?php
            $experience = explode(' ', $doctor['experience']);
            ?>

            <span class="doctors-staff-card-age"><span class="doctors-color"><?=$experience[0]?></span> <?=$experience[1]?></span>
            <button class="doctors-staff-card-btn pod-btn" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Записаться
            </button>
        </div>
    </div>
</li>