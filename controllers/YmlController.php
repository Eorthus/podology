<?php

namespace app\controllers;

use app\models\db\Products;
use yii\web\Controller;

/**
 * Yml генератор
 * @package app\controllers
 */
class YmlController extends Controller
{
    public $layout = false;

    /**
     * Запускатор
     *
     * @return string
     */
    public function actionIndex()
    {
        $data = self::getHeader();
        $data .= self::getShopData();
        $data .= self::getCategories();
        $data .= self::getDeliveryOptions();
        $data .= self::getOffers();
        $data .= self::getFooter();

        return $data;
    }

    /**
     * Отрисовка шапки
     *
     * @return string
     */
    private static function getHeader()
    {
        $date   = date('c', time() + 10800);
        $header = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $header .= "<yml_catalog date=\"{$date}\">\n";

        return $header;
    }

    /**
     * Отрисовка футера
     *
     * @return string
     */
    private static function getFooter()
    {
        return "</shop>\n</yml_catalog>";
    }

    /**
     * Отрисовка данных о магазине
     *
     * @return string
     */
    private static function getShopData()
    {
        return "<shop>\n<name>Podologya2</name>\n<company>CompanyName</company>\n<url>http://company.site.ru</url>\n<platform>Yii2 MasterVisor.Ru</platform>\n";
    }

    /**
     * Отрисовка категорий
     *
     * @return string
     */
    private static function getCategories()
    {
        $categories = "<categories>\n";
        $categories .= "<category id='1'>Бытовая техника</category>\n<category id='10' parentId='1'>Мелкая техника для кухни</category>\n<category id='101' parentId='10'>Сэндвичницы и приборы для выпечки</category>\n";
        $categories .= "</categories>\n";

        return $categories;
    }

    /**
     * Отрисовка вариантов доставки
     *
     * @return string
     */
    private static function getDeliveryOptions()
    {
        $delivery_options = "<delivery-options>\n";
        $delivery_options .= "<option cost='3500' days='5'/>\n";
        $delivery_options .= "</delivery-options>\n";

        return $delivery_options;
    }

    /**
     * Отрисовка товаров
     *
     * @return string
     */
    private static function getOffers()
    {
        $base_url = 'http://92.101.122.7/podologiya2/public_html/';
        $offers   = "<offers>\n";

        /* Критерии выборки товаров */
        $products = Products::find()->asArray()->all();

        foreach ($products as $product) {
            if (isset($product['count']) && mb_strlen($product['count']) > 0 && $product['count'] > 0) {
                $count = $product['count'];
            } else {
                $count = 0;
            }

            if ($count > 0) {
                $offers .= "<offer id='{$product['id']}'>\n";
                $offers .= "<name>{$product['title']}</name>\n";
                $offers .= "<url>{$base_url}index.php?r=shop/view&id={$product['id']}</url>\n";
                $offers .= "<price>{$product['price']}</price>\n";
                $offers .= "<currencyId>RUR</currencyId>\n";
                $offers .= "<categoryId>{$product['category_id']}</categoryId>\n";
                $offers .= "<picture>{$base_url}{$product['image']}</picture>\n";
                $offers .= "<description>{$product['description']}</description>\n";
                $offers .= "<count>{$count}</count>\n";
                $offers .= "</offer>\n";
            }
        }

        $offers .= "</offers>\n";

        return $offers;
    }
}