<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?=Yii::$app->language?>">
    <head>
        <meta charset="<?=Yii::$app->charset?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?=Html::encode($this->title)?></title>
        <?php $this->head() ?>
        <style>
            .breadcrumb {
                margin-top: 70px;
            }

            .container {
                width: 90% !important;
            }
        </style>
        <script src="https://cdn.tiny.cloud/1/ez5bv8v1pb1d82ecl5oixxs4216oev3en2m128q3ufzoyu3w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'Админка',
            'brandUrl'   => Yii::$app->homeUrl,
            'options'    => [
                'class' => 'navbar-inverse navbar-fixed-top',
                'style' => 'text-align: right;',
            ],
        ]);

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items'   => [
                [
                    'label' => 'Сайт',
                    'items' => [
                        [
                            'label' => 'Доктора',
                            'url'   => ['/admin/doctors'],
                        ],
                        [
                            'label' => 'Заболевания',
                            'url'   => ['/admin/diseases'],
                        ],
                        [
                            'label' => 'Оборудование',
                            'url'   => ['/admin/equipments'],
                        ],
                        [
                            'label' => 'Услуги',
                            'url'   => ['/admin/services'],
                        ],
                        [
                            'label' => 'Курсы',
                            'url'   => ['/admin/courses'],
                        ],
                    ],
                ],
                [
                    'label' => 'Магазин',
                    'items' => [
                        [
                            'label' => 'Заказы',
                            'url'   => ['/admin/orders'],
                        ],
                        [
                            'label' => 'Категории',
                            'url'   => ['/admin/categories'],
                        ],
                        [
                            'label' => 'Товар',
                            'url'   => ['/admin/products'],
                        ],
                        [
                            'label' => 'Баннеры',
                            'url'   => ['/admin/shop-up-banners'],
                        ],
                    ],
                ],
                [
                    'label' => 'Пользователи',
                    'url'   => ['/admin/user'],
                ],
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container">
            <?=Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])?>
            <?=Alert::widget()?>
            <?=$content?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left"></p>
            <p class="pull-right"></p>
        </div>
    </footer>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>