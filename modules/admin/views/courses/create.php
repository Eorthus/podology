<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Courses */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Курсы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
