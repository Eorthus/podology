<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Services */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
