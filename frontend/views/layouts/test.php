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
        <script src="/map/mapdata.js"></script>
        <script src="/map/1.js"></script>
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

    <div class="container-fluid" style="width: 100%; height: 100vh; margin-top: 150px; padding:60px">
        <div class="row" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center">
            <div class="col-md-12">
                <div id="map" style="float: left;"></div>
                <div>
                    <h4 style="text-align: center; margin-top: 40px">Ustoz shu joyga matn topib bering</h4>
                    <p style="letter-spacing: 2px; text-align: center">
                        Ustoz matn topib bering shu joyga
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dignissimos enim id porro praesentium. Alias eaque in incidunt, nam nulla perspiciatis quos sapiente tempora! A accusamus accusantium distinctio esse facere.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dignissimos enim id porro praesentium. Alias eaque in incidunt, nam nulla perspiciatis quos sapiente tempora! A accusamus accusantium distinctio esse facere.
                    </p>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();


