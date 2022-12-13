<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Doctors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctors-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-8">
            <?=$form->field($model, 'name')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'image')->fileInput()?>
        </div>
    </div>

    <?=$form->field($model, 'specialization')?>

    <?=$form->field($model, 'small_description')->textarea(['rows' => 6])?>

    <?=$form->field($model, 'description')->textarea(['rows' => 6])?>

    <?=$form->field($model, 'experience')->textInput(['maxlength' => true])?>

    <div class="form-group">
        <?=Html::submitButton('Save', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
