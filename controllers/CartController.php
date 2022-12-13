<?php

namespace app\controllers;

use app\models\Cart;
use app\models\db\Orders;
use app\models\db\Products;
use Yii;
use yii\web\Controller;

/**
 * Корзина покупок
 *
 * Class CartController
 * @package app\controllers
 */
class CartController extends Controller
{
    public $layout = 'cart';

    /**
     * Отображение страницы корзины
     *
     * @return string
     */
    public function actionIndex()
    {
        $session = Yii::$app->session;
        $session->open();

        return $this->render('index', compact('session'));
    }

    /**
     * Метод добавления товара в корзину
     *
     * @return bool|string
     */
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
        $product = Products::findOne($id);
        if (empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product, $qty);
        $this->layout = false;

        return true;
    }

    /**
     * Метод удаления конкретного товара из корзины
     *
     * @return string
     */
    public function actionDelItem()
    {
        $this->layout = false;
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);

        return $this->redirect('index.php?r=shop/cart');
    }

    /**
     * Метод отображения (обновления) корзины
     *
     * @return string
     */
    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;

        return $this->render('cart-modal', compact('session'));
    }

    /**
     * Обновление корзины в хеадере при добавлении товара в корзину
     * @return string
     */
    public function actionHeaderCartInfo()
    {
        $this->layout = false;

        return $this->render('header-cart');
    }

    /**
     * Изменение кол-ва продуктов на странице корзины
     *
     * @return string
     */
    public function actionEditQty()
    {
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->editItemToId($id, $qty);
        $cart->refreshValuesInCart();

        return $this->redirect(['cart/index']);
    }

    /**
     * Изменение кол-ва продуктов из модалки
     * @return string
     */
    public function actionEditQtyModal()
    {
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->editItemToId($id, $qty);
        $cart->refreshValuesInCart();

        return $qty;
    }

    /**
     * Метод получения "товаров всего"
     *
     * @return integer
     */
    public function actionGetQty()
    {
        return $_SESSION['cart.qty'];
    }

    /**
     * Метод получения инфы для модалки после нажатия кнопки "положить в корзину"
     *
     * @return integer
     */
    public function actionGetSessionData()
    {
        foreach ($_SESSION['cart'] as $key => $item) {
            echo "<div class='row cartItem'>";
            echo "<div class='col-md-2 center'><img src='{$item['img']}' style='width: 100%;'></div>";
            echo "<div class='col-md-6 modalCartProdTitle'>";
            echo $item['name'];
            echo "<div class='mg-50'></div>";
            echo "<div class='modalCartDescItem'><span>Артикул &nbsp;&nbsp;&nbsp;</span>13587</div>";
            echo "<div class='modalCartDescItem'><span>Цвет &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>бирюзово-церный</div>";
            echo "<div class='mg-50'></div>";
            echo "<div class='modalCartQtyInShop'>Осталось в наличии: 2 шт</div>";
            echo "</div>";
            echo "<div class='col-md-2'>";
            $cm = $item['qty'] - 1;
            $cp = $item['qty'] + 1;
            echo "<div class='cartNumItemMinus' data-id='{$key}' data-newcount='{$cm}'>-</div>";
            echo "<input type='text' value='{$item['qty']}' style='width: 35px; color: black; text-align: center; float: left;'>";
            echo "<div class='cartNumItemPlus' data-id='{$key}' data-newcount='{$cp}'>+</div>";
            echo "</div>";
            echo "<div class='col-md-2 modalCartPrice'>{$item['price']} &#8381;</div>";
            echo '</div>';
        }
    }

    /**
     * Метод получения инфы для модалки после нажатия кнопки "положить в корзину" 2
     *
     * @return integer
     */
    public function actionGetSessionDataResult()
    {
        return "В корзине {$_SESSION['cart.qty']} товара на сумму {$_SESSION['cart.sum']} рублей";
    }

    /**
     * @return string
     */
    public function actionSendOrder()
    {
        $this->layout = false;
        $phone = htmlspecialchars($_GET['person_phone']);
        $name = htmlspecialchars($_GET['person_name']);

        if (Yii::$app->user->id){
            $user_id = Yii::$app->user->id;
        } else {
            $user_id = 0;
        }

        if (isset($_SESSION['cart'])){
            $new_order = new Orders;
            $new_order->user_id = $user_id;
            $new_order->datetime = time();
            $new_order->sum = $_SESSION['cart.sum'];
            $new_order->products_list = serialize($_SESSION['cart']);
            $new_order->status = 1;
            $new_order->contact_person = $name;
            $new_order->contact_phone = $phone;
            $new_order->save();
        }

        return true;
    }

    /**
     * Педальное изменение кол-ва
     *
     * @return bool
     */
    public function actionAjaxEditQty()
    {
        $this->layout = false;

        $id = htmlspecialchars($_GET['id']);
        $newqty = htmlspecialchars($_GET['qty']);

        if ($newqty < 1){
            unset($_SESSION['cart'][$id]);
        } else {
            $_SESSION['cart'][$id]['qty'] = $newqty;
        }

        (new Cart)->refreshValuesInCart();

        return true;
    }
}