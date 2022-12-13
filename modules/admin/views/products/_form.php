<?php

use app\models\db\Categories;
use app\models\db\Products;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Products */
/* @var $form yii\widgets\ActiveForm */

$categories = Categories::find()->all();
$categories = ArrayHelper::map($categories, 'id', 'title');

$products    = Products::find()->all();
$products    = ArrayHelper::map($products, 'id', 'title');
$products[0] = '(отсутствует)';
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?=$form->field($model, 'title')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-2">
            <?=$form->field($model, 'category_id')->dropDownList($categories)?>
        </div>
        <div class="col-md-2">
            <?=$form->field($model, 'price')->textInput()?>
        </div>
        <div class="col-md-2">
            <?=$form->field($model, 'price_1')->textInput()?>
        </div>
        <div class="col-md-2">
            <?=$form->field($model, 'price_2')->textInput()?>
        </div>
    </div>

    <?=$form->field($model, 'small_description')->textarea(['rows' => 6])?>

    <?=$form->field($model, 'description')->textarea(['rows' => 6])?>

    <div class="row" style="margin: 35px -15px">
        <div class="col-md-4">
            <?php if (isset($model->image) && mb_strlen($model->image) > 1) {
                echo "<img src='{$model->image}' style='width: 100%'>";
            } ?>
            <?=$form->field($model, 'image')->fileInput()?>
        </div>
        <div class="col-md-4">
            <?php if (isset($model->image_2) && mb_strlen($model->image_2) > 1) {
                echo "<img src='{$model->image_2}' style='width: 100%'>";
            } ?>
            <?=$form->field($model, 'image_2')->fileInput()?>
        </div>
        <div class="col-md-4">
            <?php if (isset($model->image_3) && mb_strlen($model->image_3) > 1) {
                echo "<img src='{$model->image_3}' style='width: 100%'>";
            } ?>
            <?=$form->field($model, 'image_3')->fileInput()?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?=$form->field($model, 'country')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'manufacturer')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'packaging')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'packaging_fas')->textInput(['maxlength' => true])?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?=$form->field($model, 'weight')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'gab_a')->textInput()?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'gab_b')->textInput()?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'gab_c')->textInput()?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?=$form->field($model, 'acrticle')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'expiration_date')->textInput()?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'count')->textInput()?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'gift_id')->dropDownList($products)?>
        </div>

        <div class="col-md-3">
            <?=$form->field($model, 'in_carousel')->checkbox()?>
        </div>
    </div>

    <div class="form-group">
        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
