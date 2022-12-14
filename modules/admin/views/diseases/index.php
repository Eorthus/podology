<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\DiseasesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заболевания';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diseases-index">

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
            'name',
            //'description:ntext',
            //'image',
            //'about:ntext',
            //'symptoms_arr:ntext',
            //'doctor_id',
            //'treatment_method:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
