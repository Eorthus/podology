<?php

namespace app\controllers;

use app\models\db\Courses;
use yii\web\Controller;

class TestController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        $data = Courses::find()->asArray()->all();

        foreach ($data as $aaa){
            echo "<b>{$aaa['name']}</b>";
        }

//        $new_rec                   = new Courses;
//        $new_rec->name             = 'тест';
//        $new_rec->description      = 'тест';
//        $new_rec->image            = 'img/address.png';
//        $new_rec->about            = 'тест';
//        $new_rec->symptoms_arr     = 'тест';
//        $new_rec->doctor_id        = 1;
//        $new_rec->price            = 100;
//        $new_rec->save();

        echo '<hr>';
        echo '<pre>';
        var_dump($data);

    }
}