<li class="doctors-staff-card col-12 col-sm-6 col-md-4 col-lg-3 nonactive-card">
    <div class="category-cart-add">
        <button class="pod-btn category-cart-add-btn" data-id="<?=$product['id']?>">В корзину</button>
        <span class="category-cart-add-count">Осталось: <?=$product['count']?> шт.</span>
    </div>
    <span class="nonactive-card-info">Товар<br>закончился</span>
    <a class="doctors-staff-card-container" href="index.php?r=shop/view&id=<?=$product['id']?>">
        <div class="doctors-staff-card-img">
            <img src="<?=$product['image']?>" alt="card">
        </div>
        <div class="doctors-staff-card-info">
            <span class="doctors-staff-card-price">
                <?php echo \app\models\GetPrice::byProduct($product['id']); ?>
            </span>
            <span class="doctors-staff-card-name">
                <?=$product['title']?>
            </span>
        </div>
    </a>
</li>