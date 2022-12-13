<div class="shop-top content font-size">
    <div class="shop-container">
        <div class="shop-catalog">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Каталог
                </button>
                <ul class="dropdown-menu">
                    <li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
                            <img src="./img/menu1.png" alt="menu item">
                            <span class="shop-menu-ul-li-title">Категория 1 </span>
                            
                        </a></li>
                    <li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
                            <img src="./img/menu2.png" alt="menu item">
                            <span class="shop-menu-ul-li-title">Категория 2 </span>
                            
                        </a></li>
                    <li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
                            <img src="./img/menu3.png" alt="menu item">
                            <span class="shop-menu-ul-li-title">Категория 3 </span>
                            
                        </a></li>
                    <li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
                            <img src="./img/menu4.png" alt="menu item">
                            <span class="shop-menu-ul-li-title">Категория 4 </span>
                            
                        </a></li>
                    <li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
                            <img src="./img/menu5.png" alt="menu item">
                            <span class="shop-menu-ul-li-title">Категория 5 </span>
                            
                        </a></li>
                    <li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
                            <img src="./img/menu6.png" alt="menu item">
                            <span class="shop-menu-ul-li-title">Категория 6 </span>
                            
                        </a></li>
                    <!--<li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
                        <img src="./img/menu7.png" alt="menu item">
                        <span class="shop-menu-ul-li-title">Категория 7 </span>

                    </a></li>
                    <li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
                        <img src="./img/menu8.png" alt="menu item">
                        <span class="shop-menu-ul-li-title">Категория 8 </span>

                    </a></li>-->
                </ul>
            </div>
        </div>
        <div class="shop-search">
            <form class="d-flex" role="search" id="shop-search">
                <input class="form-control s-request" type="search" placeholder="Поиск" aria-label="Search"
                <?php if (isset($_GET['s'])) { echo " value='{$_GET['s']}' "; } ?>>
                <button class="btn btn-outline-success" type="submit">
                    <img src="./img/search.png" alt="search">
                </button>
            </form>
        </div>
    </div>
    <div class="shop-container">
        <?php if (Yii::$app->user->isGuest) { ?>
            <div class="shop-cart">
                <a class="dropdown-toggle" type="button" href="index.php?r=shop/cart">
                    <span class="shop-cart-count">0</span>
                    <img src="./img/cart.png" alt="cart">

                </a>
            </div>

            <div class="shop-cart login">
                <a class="dropdown-toggle" type="button" href="index.php?r=auth/login">
                    <img src="./img/login.png" alt="login">
                </a>
            </div>
        <?php } else { ?>
            <div class="shop-lk">
                <a class="history-link" type="button" href="index.php?r=shop/story">
                    <img src="./img/history.png" alt="history">
                </a>
            </div>
            <div class="shop-cart">
                <a class="dropdown-toggle" type="button" href="index.php?r=shop/cart">
                    <span class="shop-cart-count">0</span>
                    <img src="./img/cart.png" alt="cart">

                </a>
            </div>

            <div class="shop-cart">
                <a class="dropdown-toggle" type="button" href="index.php?r=site/logout">
                    <img src="./img/logout.png" alt="login">
                </a>
            </div>
        <?php } ?>


    </div>
</div>