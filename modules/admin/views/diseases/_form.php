<?php

use app\models\db\Doctors;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Diseases */
/* @var $form yii\widgets\ActiveForm */

$doctors = Doctors::find()->all();
$doctors = ArrayHelper::map($doctors, 'id', 'name');
?>

<div class="diseases-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'image')->fileInput() ?>
        </div>
    </div>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'symptoms_arr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'treatment_method')->textarea(['rows' => 6]) ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'price')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'doctor_id')->dropDownList($doctors) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
