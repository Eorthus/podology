<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\Products */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'user_id',
            //'company_id',
            'title',
            'small_description:ntext',
            'description:ntext',
            'image',
            //'images_arr:ntext',
            'country',
            //'manufacturer',
            //'vendor',
            'packaging',
            'packaging_fas',
            'weight',
            'category_id',
            //'parent_category',
            //'date',
            //'num_tam_dec',
            'acrticle',
            //'brand',
            'gab_a',
            'gab_b',
            'gab_c',
            //'vet_serf',
            'image_2',
            'image_3',
            //'image_4',
            //'expiration_date',
            //'link_to_video',
            //'address',
            //'delivery',
            'price',
            'price_1',
            'price_2',
        ],
    ]) ?>

</div>
