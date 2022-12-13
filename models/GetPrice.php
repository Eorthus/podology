<?php

namespace app\models;

use app\models\db\Products;
use Yii;

/**
 * Получение стоимости
 * @package app\models
 */
class GetPrice
{
    /**
     * Товара
     *
     * @param $product_id
     *
     * @return int|null
     */
    public static function byProduct($product_id)
    {
        /** @var Products $cr_product */
        $cr_product = Products::find()->where(['id' => $product_id])->one();

        if (Yii::$app->user->isGuest){
            return $cr_product->price;
        } else {
            if (Yii::$app->user->identity->price_category == 0){
                return $cr_product->price;
            } elseif (Yii::$app->user->identity->price_category == 1){
                return $cr_product->price_1;
            } elseif (Yii::$app->user->identity->price_category == 2){
                return $cr_product->price_2;
            }

            return false;
        }
    }
}