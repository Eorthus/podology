<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'small_description') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'images_arr') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'manufacturer') ?>

    <?php // echo $form->field($model, 'vendor') ?>

    <?php // echo $form->field($model, 'packaging') ?>

    <?php // echo $form->field($model, 'packaging_fas') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'parent_category') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'num_tam_dec') ?>

    <?php // echo $form->field($model, 'acrticle') ?>

    <?php // echo $form->field($model, 'brand') ?>

    <?php // echo $form->field($model, 'gab_a') ?>

    <?php // echo $form->field($model, 'gab_b') ?>

    <?php // echo $form->field($model, 'gab_c') ?>

    <?php // echo $form->field($model, 'vet_serf') ?>

    <?php // echo $form->field($model, 'image_2') ?>

    <?php // echo $form->field($model, 'image_3') ?>

    <?php // echo $form->field($model, 'image_4') ?>

    <?php // echo $form->field($model, 'expiration_date') ?>

    <?php // echo $form->field($model, 'link_to_video') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'delivery') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'price_1') ?>

    <?php // echo $form->field($model, 'price_2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
