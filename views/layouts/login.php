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
    <div class="body-index">
    <header style="box-shadow:none">
        <div class="auth-header">
        <nav class="navbar navbar-dark navbar-expand-md fixed-top header-navbar content header-menu">
        <div class="header-menu-logo col-5 col-md-4"><a href="index.php">
                <img class="header-menu-logo-img" src="./img/logo.png" alt="logo">
                <span class="header-menu-logo-title pod-body1">Клиника <br>подологии</span>
            </a>
        </div>
        </nav>
        </div>
    </header>
        <?php echo $content; ?>
   <!--     <?php echo $this->render('_parts/_footer_colors'); ?>-->
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