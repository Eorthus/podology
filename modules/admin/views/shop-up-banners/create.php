<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\ShopUpBanners */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Баннеры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-up-banners-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
