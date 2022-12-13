<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?=$form->field($model, 'email')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'username')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'second_name')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'family')->textInput(['maxlength' => true])?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?=$form->field($model, 'password_hash')->textInput(['maxlength' => true, 'value' => ''])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'city')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'price_category')->dropDownList([
                '0' => 'Розница',
                '1' => 'Салон',
                '2' => 'Опт',
            ])?>
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="form-group">
        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
