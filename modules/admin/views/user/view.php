<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title                   = $model->id;
$this->params['breadcrumbs'][] =
    [
        'label' => 'Пользователи',
        'url'   => ['index'],
    ];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a('Редактировать', [
            'update',
            'id' => $model->id,
        ], ['class' => 'btn btn-primary'])?>
        <?=Html::a('Удалить', [
            'delete',
            'id' => $model->id,
        ], [
            'class' => 'btn btn-danger',
            'data'  => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method'  => 'post',
            ],
        ])?>
    </p>

    <?=DetailView::widget([
        'model'      => $model,
        'attributes' => [
            'id',
            'email:email',
            'username',
            'second_name',
            'family',
            //'password_hash',
            //'password_reset_token',
            //'auth_key',
            //'status',
            'city',
            //            'created_at',
            //            'updated_at',
            //            'company_name',
            //            'type',
            //            'position',
            //            'phone',
            //            'show_arrival_price',
            //            'change_arrival',
            //            'my_cashboxes',
            //            'my_warehouses',
            //            'my_company',
            //            'demo',
            //            'subscribe',
            //            'acc_level',
            //            'activity',
            //            'mail_free',
            //            'second_mail',
        ],
    ])?>

</div>
