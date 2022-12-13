<?php
namespace app\models\logical;

use app\models\db\Products;

/**
 * Логичкая модель - получение данных
 */
class GetData
{
    /**
     * Получение минимальной стоимости товара в запрошенной категории
     *
     * @param $category_id
     *
     * @return mixed
     */
    public static function getMinimalPriceByCategory($category_id)
    {
        $products = Products::find()
            ->where(['category_id' => $category_id])
            ->orderBy(['price' => SORT_ASC])
            ->one();

        if ($products) {
            return $products->price;
        }

        return 0;
    }
}