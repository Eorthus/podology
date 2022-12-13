<?php

use app\models\db\Categories;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Categories */
/* @var $form yii\widgets\ActiveForm */

$categories = Categories::find()->all();
$categories = ArrayHelper::map($categories, 'id', 'title');
$categories[0] = 'Верхняя категория';
?>
<div class="categories-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?=$form->field($model, 'parent_id')->dropDownList($categories)?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'title')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'images')->fileInput()?>
        </div>
    </div>

    <div class="form-group">
        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>
    </div>

    <div class="row" style="margin-top: 55px">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php
            if (isset($model->images) && mb_strlen($model->images) > 1){
                echo "Загруженное фото:<br><img src='{$model->images}' style='width: 100%;'>";
            }
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>

    <?php ActiveForm::end(); ?>
</div>