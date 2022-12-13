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
        <link rel="stylesheet" type="text/css" href="./js/components/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="./js/components/slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="./js/node_modules/@fancyapps/ui/dist/fancybox.css"/>
        <link rel="stylesheet" href="./css/style.css">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?=Html::encode($this->title)?></title>
        <?php $this->head() ?>
        <style>
            .form-control {
                width: 100%;
            }
            .err-zone{
                color: red;
                margin: 10px 0;
                text-align: center;
            }
        </style>
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
        <div class="auth content">
            <div class="site-login auth-container">
                <h1 class="site-login-h1 index-h">Вход</h1>
                <div class="font-size">
                    <div class="form-group">
                        <form id="login-form">
                            <input type="text" class="form-control" name="login" placeholder="Логин"><br>
                            <input type="password" class="form-control" name="pass" placeholder="Пароль">
                            <div class="err-zone"></div>
                            <hr>
                            <input type="submit" class="form-control loginBtn" value="Войти">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./js/components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="./js/node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="./js/components/slick/slick.js"></script>
    <script type="text/javascript" src="./js/components/slick/slick.min.js"></script>
    <script src="./js/main2.js"></script>
    <script>
        jQuery(function ($) {
            $('#login-form').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    url: 'index.php?r=ajax/login',
                    type: 'get',
                    data: $('#login-form').serialize(),
                    success: function (res) {
                        console.log(res);

                        if (res == 'err_login'){
                            $('.err-zone').text('Введите логин');
                        }
                        if (res == 'err_pass'){
                            $('.err-zone').text('Введите пароль');
                        }
                        if (res == 'wrong_pass'){
                            $('.err-zone').text('Неверный пароль');
                        }

                        if (res == 1){
                            window.location.href = 'index.php?r=shop/index';
                        }
                    }
                });
            });
        });
    </script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>