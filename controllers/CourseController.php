<?php

namespace app\controllers;
use app\models\db\Courses;
use app\models\db\Products;
use yii\web\Controller;

/**
 * Магазин
 * @package app\controllers
 */
class CourseController extends Controller
{
    public $layout = 'colors';
            /**
     * Страница подробнее конерктного заболевания
     *
     * @return string
     */
    public function actionCourseCard()
    {
        $id = htmlspecialchars($_GET['id']);

        $data = Courses::find()->where(['id' => $id])->one();

        return $this->render('course-card', [
            'data' => $data,
        ]);
    }
}