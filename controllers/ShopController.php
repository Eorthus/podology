<?php

namespace app\controllers;

use app\models\db\Courses;
use app\models\db\Products;
use yii\web\Controller;

/**
 * Магазин
 * @package app\controllers
 */
class ShopController extends Controller
{
    public $layout = 'shop';

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
     * Поиск товара
     *
     * @return string
     */
    public function actionSearch()
    {
        $request = htmlspecialchars($_GET['s']);

        $products = Products::find()
            ->where([
                'like',
                'title',
                $request,
            ])
            ->asArray()
            ->all();

        return $this->render('search', [
            'products' => $products,
        ]);
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
        if (isset($_GET['id'])) {
            $id = htmlspecialchars($_GET['id']);
        } else {
            $id = 1;
        }

        $product = Products::find()->where(['id' => $id])->one();

        return $this->render('view', [
            'product' => $product,
        ]);
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

    /**
     * @return int
     */
    public function actionOrderSended()
    {
        session_destroy();

        return $this->render('order-sended');
    }
}