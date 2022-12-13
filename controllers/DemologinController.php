<?php

namespace app\controllers;
use app\models\db\Courses;
use app\models\db\Products;
use yii\web\Controller;

/**
 * Магазин
 * @package app\controllers
 */
class DemologinController extends Controller
{
    public $layout = 'shop-demologin';

    /**
     * Главная - весь товар
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Обзор категории
     *
     * @return string
     */
    public function actionCategory()
    {
        return $this->render('category');
    }
    /**
     * Корзина
     *
     * @return string
     */
    public function actionCart()
    {
        return $this->render('cart');
    }
    /**
     * История
     *
     * @return string
     */
    public function actionStory()
    {
        return $this->render('story');
    }

    /**
     * Обзор товара
     *
     * @return string
     */
    public function actionView()
    {
       // $id = htmlspecialchars($_GET['id']);

      //  $products = Products::find()->where(['id' => $id])->one();

        return $this->render('view'
        //,         [            'products' => $products,       ]
    );
    }
    
    /**
     * Демонстрация отсутствия товара (класс nonactive)
     *
     * @return string
     */
    public function actionViewNonactiveClass()
    {
       // $id = htmlspecialchars($_GET['id']);

      //  $products = Products::find()->where(['id' => $id])->one();

        return $this->render('view-nonactive-class'
        //,         [            'products' => $products,       ]
    );
    }
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