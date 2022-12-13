<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Корзина
 * @package app\models
 */
class Cart extends ActiveRecord
{
    public $newQty;
    public $newSum;

    /**
     * Добавление в корзину
     *
     * @param     $product
     * @param int $qty
     */
    public function addToCart($product, $qty = 1)
    {
        if (isset($_SESSION['cart'][$product->id])) {
            $_SESSION['cart'][$product->id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$product->id] = [
                'qty'      => $qty,
                'name'     => $product->title,
                'price'    => $product->price,
                'img'      => $product->image,
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] =
            isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
    }

    /**
     * Пересчет при удалении
     *
     * @param $id
     *
     * @return bool
     */
    public function recalc($id)
    {
        if (!isset($_SESSION['cart'][$id])) {
            return false;
        } else {
            $qtyMinus             = $_SESSION['cart'][$id]['qty'];
            $sumMinus             = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
            $_SESSION['cart.qty'] -= $qtyMinus;
            $_SESSION['cart.sum'] -= $sumMinus;
            unset($_SESSION['cart'][$id]);
        }

        return true;
    }

    /**
     * Внесение изменений в сессию по кол-ву продукта
     *
     * @param int $id
     * @param int $qty
     *
     * @return bool
     */
    public function editItemToId($id, $qty)
    {
        if ($qty > 0) {
            $_SESSION['cart'][$id]['qty'] = $qty;
        } else {
            unset($_SESSION['cart'][$id]);
        }

        return true;
    }

    /**
     * Функция пересчета cart.qty и cart.sum (нов)
     * @return bool
     */
    public function refreshValuesInCart()
    {
        $this->newQty = 0;
        $this->newSum = 0;

        foreach ($_SESSION['cart'] as $id => $par) {
            $this->newQty += $par['qty'];
            $this->newSum += $par['price'] * $par['qty'];
        }

        $session = Yii::$app->session;
        $session->open();
        $session['cart.qty'] = $this->newQty;
        $session['cart.sum'] = $this->newSum;

        return true;
    }
}