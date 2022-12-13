<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Diseases */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Заболевания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diseases-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>