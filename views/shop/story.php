<?php

/* @var $this yii\web\View */

use app\models\db\Orders;
use app\models\db\Products;

$this->title = 'История заказов';
?>
<main>
    <section class="doctors-staff illness-cards content shop-orders category-list ">
        <span class="index-h doctors-staff-h pod-h3">История заказов</span>
        <ul class="story-main">
            <?php
            if (Yii::$app->user->isGuest) {
                echo "Просматривать историю могут только авторизированные пользователи";
            } else {
                $my_history = Orders::find()->where(['user_id' => Yii::$app->user->id])->asArray()->all();

                if (count($my_history) > 0) {
                    foreach ($my_history as $data) { ?>
                        <li class="story-main-order">
                            <span class="story-main-time"><?=date('d.m.Y', $data['datetime'])?></span>
                            <ul class="cart-main-info-orders">

                                <?php
                                $products = unserialize($data['products_list']);

                                foreach ($products as $id => $product) {
                                    $cr_product = Products::find()->where(['id' => $id])->one();
                                    ?>
                                    <li class="cart-main-info-orders-li">
                                        <div class="cart-main-info-orders-img">
                                            <img src="<?=$cr_product->image?>" alt="order">
                                        </div>
                                        <div class="cart-main-info-orders-container">
                                            <div class="cart-main-info-orders-about">
                                                <span class="cart-main-info-orders-about-title">
                                                    <?=$cr_product->title?>
                                                </span>
                                                <span class="view-main-articul">Артикул: 12342</span>
                                                <span class="cart-main-info-orders-about-price">
                                                    <?=$product['price']?>&nbsp;</span>
                                            </div>
                                            <div class="cart-main-info-orders-count">
                                                <span class="cart-main-info-orders-count-num">
                                                    <?=$product['qty']?> шт.
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <button class="view-main-btn pod-btn">Повторить</button>
                        </li>

                    <?php }
                } else {
                    echo "История пуста";
                }
            }
            ?>
        </ul>
    </section>

    <?php /*
    <nav aria-label="Page navigation example " class="content category-nav story-nav">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link " href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
 */ ?>
</main>
