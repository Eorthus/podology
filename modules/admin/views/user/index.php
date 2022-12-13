<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

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
            'email:email',
            'username',
            //'second_name',
            //'family',
            //'password_hash',
            //'password_reset_token',
            //'auth_key',
            //'status',
            //'city',
            //'created_at',
            //'updated_at',
            //'company_name',
            //'type',
            //'position',
            //'phone',
            //'show_arrival_price',
            //'change_arrival',
            //'my_cashboxes',
            //'my_warehouses',
            //'my_company',
            //'demo',
            //'subscribe',
            //'acc_level',
            //'activity',
            //'mail_free',
            //'second_mail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
