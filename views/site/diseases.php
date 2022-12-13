<?php
$this->title = 'Заболевания';
?>
<main>
    <section class="doctors-staff illness-cards content">
        <span class="index-h doctors-staff-h pod-h3">Заболевания</span>
        <ul class="doctors-staff-container row">
            <?php
            $diseases = \app\models\db\Diseases::find()->asArray()->all();

            foreach ($diseases as $disease) {
                echo $this->render('_diseasesCard', [
                    'disease' => $disease,
                ]);
            } ?>
        </ul>
    </section>
</main>
