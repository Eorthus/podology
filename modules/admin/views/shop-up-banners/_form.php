<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\ShopUpBanners */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-up-banners-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'price')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'image')->fileInput() ?>
        </div>
    </div>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="row" style="margin-top: 35px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php
            if (isset($model->image) && mb_strlen($model->image) > 1){
                echo "Загруженный баннер:<br><img src='{$model->image}' style='width: 100%;'>";
            }
            ?>
        </div>
        <div class="col-md-3"></div>
    </div>

</div>
