<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\MapAsset;
use yii\bootstrap4\Html;

MapAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/template/script.js"></script>
        <?php $this->head() ?>
    </head>
    <style>
        #header.header-scrolled, #header.header-inner-pages {
            background: #fff;
            color: black;
            box-shadow: 0 0 5px black;
        }
        #header .logo a{
            color: black;
        }
        .navbar a, .navbar a:focus{
            color: black;
        }
    </style>
    <body style="margin: 0; overflow-x: hidden">
    <?php $this->beginBody() ?>
    <header id="header" class="fixed-top header-inner-pages">
        <div>
            <marquee width="100%" direction="right" style="border-bottom: 1px solid #0d6efd; padding: 12px; ">
                <span><b>Ko'mir:</b> 348.05 UZS</span> |
                <span><b>Shifer:</b> 35 000 UZS</span> |
                <span><b>Armatura (12):</b> 8 798.34 UZS</span> |
                <span><b>Paxta yog'i:</b> 17 206.11 UZS</span> |
                <span><b>Shakar (||| toifa):</b> 8 142.00 UZS</span> |
                <span><b>Benzin (80):</b> 7 737.77 UZS</span> |
                <span><b>Benzin (91 ):</b> 9 928.91 UZS</span> |
                <span><b>Shrot :</b> 3 902.13 UZS</span> |
                <span><b>Sheluxa :</b> 2 927.76 UZS</span> |
                <span><b>Omuxta yem :</b> 1 771.62 UZS</span> |
                <span><b>Ko'mir:</b> 348.05 UZS</span> |
                <span><b>Shifer:</b> 35 000 UZS</span> |
                <span><b>Armatura (12):</b> 8 798.34 UZS</span> |
                <span><b>Paxta yog'i:</b> 17 206.11 UZS</span> |
                <span><b>Shakar (||| toifa):</b> 8 142.00 UZS</span> |
                <span><b>Benzin (80):</b> 7 737.77 UZS</span> |
                <span><b>Benzin (91 ):</b> 9 928.91 UZS</span> |
                <span><b>Shrot :</b> 3 902.13 UZS</span> |
                <span><b>Sheluxa :</b> 2 927.76 UZS</span> |
                <span><b>Omuxta yem :</b> 1 771.62 UZS</span> |
            </marquee>
        </div>
        <div class="container d-flex align-items-center justify-content-between">
            <nav id="navbar" class="navbar" style="margin: -15px !important;">
                <ul style="display: flex; align-items: center; justify-content: space-between">
                    <li><a href="<?=\yii\helpers\Url::home()?>"><img width="250" height="80" src="/img/1212.png" alt=""></a></li>
                    <div>
                        <li><a class="nav-link scrollto" style="text-transform: uppercase" href="<?=\yii\helpers\Url::home()?>">Bosh Sahifa</a></li>
                        <li><a class="nav-link scrollto" style="text-transform: uppercase" href="<?=\yii\helpers\Url::to(['site/hududiy'])?>">Hududiy Aniqlash</a></li>
                        <li><a class="nav-link scrollto" style="text-transform: uppercase" href="<?=\yii\helpers\Url::to(['site/hisobot'])?>">XAVFNI BAHOLASH</a></li>
                        <li><a class="nav-link scrollto" style="text-transform: uppercase" href="<?=\yii\helpers\Url::to(['site/category'])?>">Kategoriyalar</a></li>
                        <li><a class="nav-link scrollto" style="text-transform: uppercase" href="<?=\yii\helpers\Url::to(['site/contact'])?>">Bog'lanish</a></li>
                        <?php if (Yii::$app->user->isGuest): ?>
                            <li><a class="nav-link scrollto" style="text-transform: uppercase" href="<?=\yii\helpers\Url::to(['site/signup'])?>">Ro'yxatdan O'tish</a></li>
                            <li><a style="background-color: #0d6efd; padding: 10px;border-radius: 5px; color: white" href="<?=\yii\helpers\Url::to(['site/login'])?>">Kirish</a></li>
                        <?php endif; ?>
                        <?php if (!Yii::$app->user->isGuest) {
                            echo  '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Chiqish (' . Yii::$app->user->identity->username . ')',['class'=>'nav-link scrollto','style' => 'background:none; border:none;outline:none;color:#000; text-transform: uppercase'])
                                . Html::endForm()
                                . '</li>';?>
                            <li><a style="background-color: #0d6efd; color: #fff;  padding: 10px;border-radius: 5px; text-transform: uppercase" href="<?=\yii\helpers\Url::to(['site/profil'])?>">Profil</a></li>
                        <?php } ?>
                    </div>
                </ul>
            </nav>

        </div>
    </header>

        <?=$content?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();

