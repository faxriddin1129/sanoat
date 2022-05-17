<?php

/* @var $this yii\web\View */

use common\models\User;
use frontend\models\News;
use frontend\models\Production;
use yii\helpers\Url;

$this->title = 'Trade in Industrial';
$data = News::find()->where(['status'=>1])->limit(3)->all();
$dataP = Production::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all();
?>

<div class="container-fluid" style="padding: 0 !important; margin-top: 15px">
    <div class="row">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner">
                <div style="height: 90vh" class="carousel-item active">
                    <img src="https://sgcc.uz/uploads/news/5f460dc260223.png" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>QASHQADARYO VILOYATI SANOAT SEKTORLARI</h2>
                        <p>USHBU PLATFORMA ORQALI HUDUDLARDAGI SANOAT SEKTORLARI HAMDA ISHLASB CHIQARISH KORXONALARIDAGI XOM-ASHYO MAXSULOTLARINI TAN NARXI, SIFATI VA O'ZBEKISTON BOZORIDAGI O'RNI XAQIDA BILIB OLISHINGIUZ MUMKIN!</p>
                        <a href="<?=\yii\helpers\Url::to(['site/profil'])?>" class="text-white btn btn-primary text-uppercase p-2 c-a"><b>Tizimdan Foydalanish</b></a>
                        <div class="buttons" style="background-color: #00000060; padding-top: 30px; padding-bottom: 50px">
                            <form action="/site/cate?category_id=1" method="get">
                                <input style="display: inline-block; padding: 6px; width: 50%; border-radius: 4px;" type="text" name="search" placeholder="Sayt bo`ylab qidiruv...">
                                <input style="display: inline-block;" type="submit" value="Izlash" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
                <div style="height: 90vh"  class="carousel-item">
                    <img src="https://adu.uz/rasmlar/news/2020/IMG_3833.JPG" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>QASHQADARYO VILOYATI SANOAT SEKTORLARI</h2>
                        <p>USHBU PLATFORMA ORQALI HUDUDLARDAGI SANOAT SEKTORLARI HAMDA ISHLASB CHIQARISH KORXONALARIDAGI XOM-ASHYO MAXSULOTLARINI TAN NARXI, SIFATI VA O'ZBEKISTON BOZORIDAGI O'RNI XAQIDA BILIB OLISHINGIUZ MUMKIN!</p>
                        <a href="<?=\yii\helpers\Url::to(['site/profil'])?>" class="text-white btn btn-primary text-uppercase p-2 c-a"><b>Tizimdan Foydalanish</b></a>
                        <div class="buttons" style="background-color: #00000060; padding-top: 30px; padding-bottom: 50px">
                            <form action="/site/cate?category_id=1" method="get">
                                <input style="display: inline-block; padding: 6px; width: 50%; border-radius: 4px;" type="text" name="search" placeholder="Sayt bo`ylab qidiruv...">
                                <input style="display: inline-block;" type="submit" value="Izlash" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
                <div style="height: 90vh"  class="carousel-item">
                    <img src="https://storage.kun.uz/source/4/STnYMY-P8Z3SAh6uIRRGbRTIwLkgvw2O.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>QASHQADARYO VILOYATI SANOAT SEKTORLARI</h2>
                        <p>USHBU PLATFORMA ORQALI HUDUDLARDAGI SANOAT SEKTORLARI HAMDA ISHLASB CHIQARISH KORXONALARIDAGI XOM-ASHYO MAXSULOTLARINI TAN NARXI, SIFATI VA O'ZBEKISTON BOZORIDAGI O'RNI XAQIDA BILIB OLISHINGIUZ MUMKIN!</p>
                        <a href="<?=\yii\helpers\Url::to(['site/profil'])?>" class="text-white btn btn-primary text-uppercase p-2 c-a"><b>Tizimdan Foydalanish</b></a>
                        <div class="buttons" style="background-color: #00000060; padding-top: 30px; padding-bottom: 50px">
                            <form action="/site/cate?category_id=1" method="get">
                                <input style="display: inline-block; padding: 6px; width: 50%; border-radius: 4px;" type="text" name="search" placeholder="Sayt bo`ylab qidiruv...">
                                <input style="display: inline-block;" type="submit" value="Izlash" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!--            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">-->
<!--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                <span class="sr-only">Previous</span>-->
<!--            </a>-->
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>

<?php
if(Yii::$app->session->hasFlash('success')): ?>
    <div class="container">
        <div class="ror">
            <div class="alert-success alert">
                <?php echo Yii::$app->session->getFlash('success'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="container mt-5">
    <h3 class="text-uppercase text-center text-primary">Eng So'nggi E`LONLAR</h3>
    <div class="row">
        <?php foreach ($dataP as $item): ?>
            <div class="col-md-3 col-12 p-4">
                <img class="card-img-top img-fluid img-thumbnail h-50 mt-2" src="/img/<?=$item['img_1']?> " alt="">
                <div class="card-body">
                    <h4 class="text-dark"><?=$item['name']?></h4>
                    <p><a href="<?=Url::to(['site/views','id'=>$item['id']])?>"><span class="text-secondary">Ishlab chiqaruvchi korxona</span> <b class="text-uppercase text-primary"><?=User::findOne($item['user_id'])->companyName?></b></a></p>
                    <p>Bozordagi Narxi <b><?=$item['price']?>  UZS</b></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <h3 class="text-primary text-uppercase text-center mt-4 mb-4">Maxsulotlar</h3>
        <div class="col-md-4 mb-4">
            <div class="myca">
                <img src="/kat/ormon.png">
                <p><a class="text-white text-uppercase" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>6])?>">O‘rmon xo‘jaligi, yog‘ochni qayta ishlash va qog‘oz sanoati</a></p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="myca">
                <img src="/kat/kimyo.png">
                <p><a class="text-white text-uppercase" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>1])?>">KIMYO VA NEFTKIMYO SANOATI</a></p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="myca">
                <img src="/kat/mashinasozlik.png">
                <p><a class="text-white text-uppercase" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>2])?>">MASHINASOZLIK VA METAL ISHLATISH</a></p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="myca">
                <img src="/kat/sanoat.png">
                <p><a class="text-white text-uppercase" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>5])?>">SANOAT</a></p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="myca">
                <img src="/kat/yengil.png">
                <p><a class="text-white text-uppercase" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>3])?>">YENGIL SANOAT</a></p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="myca">
                <img src="/kat/oziq.png">
                <p><a class="text-white" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>4])?>">OZIQ-OVQAT SANOATI</a></p>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <h3 class="text-uppercase text-center text-primary border-bottom border-primary pb-3">Yangiliklar</h3>
    </div>
    <?php foreach ($data as $datum): ?>
        <div class="row border-primary border-bottom pt-3 pb-3">
            <div class="col-md-5">
                <img class="img-thumbnail" src="/img/<?=$datum['img']?>" alt="News">
            </div>
            <div class="col-md-7">
                <h4 class="text-center"><?=$datum['title']?></h4>
                <p class="text-justify" style="max-height: 198px; overflow: hidden">
                    <?=$datum['description']?>
                </p>
                <a href="<?=\yii\helpers\Url::to(['site/new','id'=>$datum['id']])?>" class="btn btn-primary text-white">Batafsil</a>
                <br>
                <br>
                <h6 class="alert"><?=$datum['news_date']?></h6>
            </div>
        </div>
    <?php endforeach; ?>

    <br>
    <div class="row">
        <div class="col-md-12">
            <a href="<?=\yii\helpers\Url::to(['site/news'])?>" class="btn btn-primary text-white">Barcha Yangiliklar</a>
        </div>
    </div>
    <br>

</div>

<style>
    .myca{
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    .myca img{
        object-fit: cover;
        width: 100%;
    }
    .myca p{
        width: 100%;
        min-height: 50px;
        background-color: rgba(0, 0, 0, 0.80);
        text-align: center;
        color: white;
        padding: 10px;
        position: absolute;
        left: 0;
        bottom: -20px;
    }
</style>

<style>
    @import url(https://fonts.googleapis.com/css?family=Open+sans);
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
    @import url(https://fonts.googleapis.com/css?family=Playfair+Display);
    .snip1515 {
        font-family: 'Open Sans', Arial, sans-serif;
        position: relative;
        margin: 10px;
        min-width: 230px;
        max-width: 315px;
        width: 100%;
        color: #000000;
        text-align: center;
        line-height: 1.4em;
        font-size: 14px;
        box-shadow: none !important;
    }

    .snip1515 * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .snip1515 .profile-image {
        display: inline-block;
        width: 80%;
        z-index: 1;
        position: relative;
        padding: 10px;
        border: 2px solid #e8b563;
    }

    .snip1515 .profile-image img {
        max-width: 100%;
        vertical-align: top;
    }

    .snip1515 figcaption {
        width: 100%;
        background-color: #F2F2F2;
        color: #555;
        padding: 125px 25px 25px;
        margin-top: -100px;
        display: inline-block;
    }

    .snip1515 h3,
    .snip1515 h4,
    .snip1515 p {
        margin: 0 0 5px;
    }

    .snip1515 h3 {
        font-weight: 600;
        font-size: 1.3em;
        font-family: 'Playfair Display', Arial, sans-serif;
    }

    .snip1515 h4 {
        color: #8c8c8c;
        font-weight: 400;
        letter-spacing: 2px;
    }

    .snip1515 p {
        font-size: 0.9em;
        letter-spacing: 1px;
        opacity: 0.9;
    }

    .snip1515 .icons {
        text-align: center;
        width: 100%;
    }

    .snip1515 i {
        padding: 10px 2px;
        display: inline-block;
        font-size: 18px;
        font-weight: normal;
        color: #e8b563;
        opacity: 0.75;
    }

    .snip1515 i:hover {
        opacity: 1;
        -webkit-transition: all 0.35s ease;
        transition: all 0.35s ease;
    }
</style>

<style>
    .my{
        padding: 30px;
        font-size: 40px;
    }
    .carousel-item{.
        height: 90vh;
    }
    .carousel-caption{
        position: absolute;
        width: 100%;
        right: 0;
        bottom: 0;
        left: 0;
        padding-top: 10%;
        padding-bottom: 1.25rem;
        color: #fff;
        padding-right: 50%;
        background-image: linear-gradient(to right, #000000f0 , #00000017);
    }
    .carousel-caption p{
        text-align: center;
        font-family: sans-serif;
        font-weight: bold;
    }
    .carousel-caption h2{
        font-family: sans-serif;
        font-weight: bold;
    }
    .c-a{
        margin-top: 40px;
        margin-bottom: 30px;
    }
    .ho-a{
        color: #fff;
    }
    .ho-a{
        color: #fff;
    }

    .buttons a:hover{
        color: #fff;
    }
    .tabmy li a{
        color: #000;
    }
    @media screen and (max-width: 780px) {
        .body-content {
            background-size: 100%;
        }
        .carousel-item{
            height: 50%;
        }
        .ho{
            margin-right: 0;
        }
        .mobile-nav-toggle{
            color: black;
        }
    }
</style>


<?php
$script = <<< JS

$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

    $('.carousel').carousel({
        interval: 50
})
JS;
$this->registerJs($script);
?>

