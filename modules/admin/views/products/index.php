<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товар';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
            //'company_id',
            'title',
            //'small_description:ntext',
            //'description:ntext',
            //'image',
            //'images_arr:ntext',
            //'country',
            //'manufacturer',
            //'vendor',
            //'packaging',
            //'packaging_fas',
            //'weight',
            //'category_id',
            //'parent_category',
            //'date',
            //'num_tam_dec',
            //'acrticle',
            //'brand',
            //'gab_a',
            //'gab_b',
            //'gab_c',
            //'vet_serf',
            //'image_2',
            //'image_3',
            //'image_4',
            //'expiration_date',
            //'link_to_video',
            //'address',
            //'delivery',
            //'price',
            //'price_1',
            //'price_2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
