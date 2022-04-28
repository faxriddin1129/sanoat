<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\SiteAsset;
use yii\bootstrap4\Html;
SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            window.replainSettings = { id: '46daa7e1-a5c3-4d44-8f46-fffc09eaf857' };
            (function(u){var s=document.createElement('script');s.async=true;s.src=u;
                var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
            })('https://widget.replain.cc/dist/client.js');
        </script>
        <?php $this->head() ?>
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
            .gg{
                color: black;
            }
        </style>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header id="header" class="fixed-top header-inner-pages">
        <div class="marque">
            <marquee width="100%" direction="right" class="text-black border-bottom border-primary pb-2">
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
            <a href="<?=\yii\helpers\Url::home()?>"><img width="250" height="75" src="/img/1212.png" alt=""></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="gg"><a class="nav-link scrollto " href="<?=\yii\helpers\Url::home()?>"><span class="gg">Bosh Sahifa</span></a></li>
                    <li><a class="nav-link scrollto" href="<?=\yii\helpers\Url::to(['site/category'])?>"><span class="gg">Kategoriyalar</span></a></li>
                    <li><a class="nav-link scrollto" href="<?=\yii\helpers\Url::to(['site/hududiy'])?>"><span class="gg">Hududiy Aniqlash</span></a></li>
                    <li><a class="nav-link scrollto" href="<?=\yii\helpers\Url::to(['site/hisobot'])?>"><span class="gg">XAVFNI BAHOLASH</span></a></li>
                    <li><a class="nav-link scrollto" href="<?=\yii\helpers\Url::to(['site/contact'])?>"><span class="gg">Bog'lanish</span></a></li>
                    <?php if (Yii::$app->user->isGuest): ?>
                        <li><a class="nav-link scrollto " href="<?=\yii\helpers\Url::to(['site/signup'])?>"><span class="gg">Ro'yxatdan O'tish</span></a></li>
                        <li><a class="btn btn-primary p-2 text-white" href="<?=\yii\helpers\Url::to(['site/login'])?>"><span class="gg text-white">Kirish</span></a></li>
                    <?php endif; ?>
                    <?php if (!Yii::$app->user->isGuest) {
                        echo  '<li class="font-weight-bolder">'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'CHIQISH (' . Yii::$app->user->identity->username . ')',['class'=>'nav-link scrollto','style' => 'background:none; border:none;outline:none;color:#000;'])
                            . Html::endForm()
                            . '</li>';?>
                        <li><a class="btn btn-primary p-2 text-white text-uppercase" href="<?=\yii\helpers\Url::to(['site/profil'])?>">Profil</a></li>
                <?php } ?>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>


    <main id="main">
        <section class="inner-page" style="padding: 0; margin-top: 70px;">
                <?=$content?>
        </section>

    </main>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h5>QASHQADARYO VILOYAT <br> SANOAT SEKTORLARI</h5>
                            <p>
                                A108 Mustaqillik <br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                                <strong>Faks:</strong> 1 5589 55488 55<br>
                            </p>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="fa fa-telegram"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4 class="">Menyu</h4>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?=\yii\helpers\Url::to(['site/login'])?>"> Kirish</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?=\yii\helpers\Url::to(['site/signup'])?>"> Ro'yxatdan O'tish</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?=\yii\helpers\Url::to(['site/hududiy'])?>"> Hududiy Aniqlash</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="<?=\yii\helpers\Url::to(['site/category'])?>"> Kategoriyalar</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Industrial Sector</h4>
                        <p>O'zingizni qiziqtirgan malumotni topishingiz mumkin! <br>Sayt Bo'ylab Izlash.</p>
                        <a href="/site/cate?category_id=1">
                            <form action="/" method="get">
                                <input style="width: 100%; background: none; outline: none; border: none;" type="text" name="search" placeholder="Sayt bo`ylab qidiruv...">
                                <input type="submit" value="Izlash" class="bg-primary">
                            </form>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center bg-primary"><i class="bi bi-arrow-up-short"></i></a>

    <?php $this->endBody() ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </html>
<?php $this->endPage();
