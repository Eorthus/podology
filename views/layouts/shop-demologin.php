<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?=Yii::$app->language?>">
    <head>
        <meta charset="<?=Yii::$app->charset?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./js/components/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="./js/components/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="./js/components/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="./js/node_modules/@fancyapps/ui/dist/fancybox.css" />
        <link rel="stylesheet" href="./css/style.css">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?=Html::encode($this->title)?></title>
        <?php $this->head() ?>
    </head>
    <body style="position: relative;" class="change-color">
    <?php $this->beginBody() ?>
    <?php echo $this->render('_parts/_modals'); ?>
    <div class="body-index">
        <?php echo $this->render('_parts/_header_colors'); ?>
        <div class="shop-top content font-size">
    <div class="shop-container">
<div class="shop-catalog">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Каталог
  </button>
  <ul class="dropdown-menu">
  <li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
    <img src="./img/menu1.png" alt="menu item">
    <span class="shop-menu-ul-li-title">Категория 1 </span>
           <!--icons from icons8.ru-->
</a></li>
<li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
    <img src="./img/menu2.png" alt="menu item">
    <span class="shop-menu-ul-li-title">Категория 2 </span>
           <!--icons from icons8.ru-->
</a></li>
<li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
    <img src="./img/menu3.png" alt="menu item">
    <span class="shop-menu-ul-li-title">Категория 3 </span>
           <!--icons from icons8.ru-->
</a></li>
<li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
    <img src="./img/menu4.png" alt="menu item">
    <span class="shop-menu-ul-li-title">Категория 4 </span>
           <!--icons from icons8.ru-->
</a></li>
<li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
    <img src="./img/menu5.png" alt="menu item">
    <span class="shop-menu-ul-li-title">Категория 5 </span>
           <!--icons from icons8.ru-->
</a></li>
<li class="shop-menu-ul-li"><a href="index.php?r=shop/category">
    <img src="./img/menu6.png" alt="menu item">
    <span class="shop-menu-ul-li-title">Категория 6 </span>
           <!--icons from icons8.ru-->
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
<form class="d-flex" role="search">
      <input class="form-control" type="search" placeholder="Поиск" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">
        <img src="./img/search.png" alt="search">
      </button>
    </form>
</div>
</div>
<div class="shop-container">

<div class="shop-lk">
<a class="history-link" type="button" href="index.php?r=shop/story">
                                <img src="./img/history.png" alt="history">
                              
</a>
</div>
<div class="shop-cart">
<a class="dropdown-toggle" type="button" href="index.php?r=shop/cart">
                                <span class="shop-cart-count">0</span>
                                <img src="./img/cart.png" alt="cart">
                                <!--icons from icons8.ru-->
</a>
</div>
<!--
<div class="shop-cart login">
<a class="dropdown-toggle" type="button" href="index.php?r=auth/login">
                                <img src="./img/login.png" alt="login">
                                
</a>
</div>-->
<div class="shop-cart">
<a class="dropdown-toggle" type="button" href="index.php?r=shop/index">
                                <img src="./img/logout.png" alt="login">
                            
</a>
</div>
</div>
</div>
        <?php echo $content; ?>
        <?php echo $this->render('_parts/_footer_colors'); ?>
    </div>
    <script type="text/javascript" src="./js/components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./js/components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="./js/node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="./js/components/slick/slick.js"></script>
  <script type="text/javascript" src="./js/components/slick/slick.min.js"></script>
    <script src="./js/main2.js"></script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>