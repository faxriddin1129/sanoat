<?php

/* @var $this yii\web\View */
/* @var $id \frontend\controllers\SiteController */


$this->title = 'Industrial Sector';
$dataCarousel = \frontend\models\Production::find()->where(['status'=>1])->limit(3)->all();
$dataTwo = \frontend\models\Production::find()->where(['status'=>1])->limit(2)->all();
$data = \frontend\models\Production::find()->where(['status'=>1])->all();

?>

<div class="container" style="margin-top: 80px">
        <div class="row mb-5">
            <h2 class="text-center text-primary m-4">Kategoriyalar</h2>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-3 p-3 ho bg-primary text-center text-white">
                    <a class="text-white text-uppercase" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>6])?>"><b>O‘rmon xo‘jaligi, yog‘ochni va qog‘oz sanoati</b></a>
                </div>
                <div class="col-md-3  p-3 ho bg-primary text-center text-white d-flex justify-content-center align-items-center">
                    <a class="text-white ext-uppercase" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>1])?>"><b>KIMYO VA NEFTKIMYO SANOATI</b></a>
                </div>
                <div class="col-md-3  p-3 ho bg-primary text-center text-white d-flex justify-content-center align-items-center">
                    <a class="text-uppercase text-white" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>2])?>"><b>MASHINASOZLIK VA METAL ISHLATISH</b></a>
                </div>
                <div class="col-md-3  p-3 ho bg-primary text-center text-white d-flex justify-content-center align-items-center">
                    <a class="text-uppercase text-white" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>5])?>"><b>SANOAT</b></a>
                </div>
                <div class="col-md-3  p-3 ho bg-primary text-center text-white d-flex justify-content-center align-items-center">
                    <a class="text-uppercase text-white" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>3])?>"><b>YENGIL SANOAT</b></a>
                </div>
                <div class="col-md-3  p-3 ho bg-primary text-center text-white d-flex justify-content-center align-items-center">
                    <a class="text-uppercase text-white" href="<?=\yii\helpers\Url::to(['site/cate','category_id'=>4])?>"><b>OZIQ-OVQAT SANOATI</b></a>
                </div>
            </div>
            <h1 class="h3 pt-5 text-uppercase text-left pb-3 pt-1 text-secondary">Maxsulotlar</h1>
        <div class="col-md-6 card" style="box-sizing: border-box; max-height: 400px; padding: 10px">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">

                <?php $i = 1; ?>
                <?php foreach ($dataCarousel as $item): ?>
                    <div class="carousel-item  <?php if ($i == 1){echo "active";} ?>">
                        <img src="/img/<?=$item['img_1']?>" alt="Chicago" width="100%" height="380">
                        <div class="carousel-caption" style="background-color:rgba(0,0,0,0.82); padding: 10px;">
                            <h4 class="text-warning"><?=$item['name']?></h4>
                            <p>
                                <a href="<?=\yii\helpers\Url::to(['site/views','id'=>$item['id']])?>"><span class="text-secondary">Ishlab chiqaruvchi korxona</span>
                                    <br>
                                    <b class="text-uppercase text-primary">
                                        <?=\common\models\User::findOne($item['user_id'])->companyName?>
                                    </b></a></p>
                            <p>Bozordagi Narxi <b><?=$item['price']?> UZS</b></p>
                        </div>
                    </div>
                <?php $i++; ?>
                <?php endforeach; ?>

                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row" style="padding-left: 10px;">
                <?php foreach ($dataTwo as $item): ?>
                <div class="col-md-5 col-12 card mr-3" style="max-height: 400px">
                    <img class="card-img-top img-fluid img-thumbnail mt-2" style="height: 50%;" src="/img/<?=$item['img_1']?>">
                    <div class="card-body">
                        <h6 class="text-warning"><?=$item['name']?></h6>
                        <p><a href="<?=\yii\helpers\Url::to(['site/views','id'=>$item['id']])?>"><span class="text-secondary">Ishlab chiqaruvchi korxona</span> <b class="text-uppercase text-primary"><?=\common\models\User::findOne($item['user_id'])->companyName?></b></a></p>
                        <p>Bozordagi Narxi <b><?=$item['price']?>  UZS</b></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
q
<div class="container mb-5">
    <div class="row">
        <?php foreach ($data as $item): ?>
            <div class="col-md-3 mb-3 col-12 card ml-3">
                <img class="card-img-top img-fluid img-thumbnail h-50 mt-2" src="/img/<?=$item['img_1']?> " alt="">
                <div class="card-body">
                    <h4 class="text-warning"><?=$item['name']?></h4>
                    <p><a href="<?=\yii\helpers\Url::to(['site/views','id'=>$item['id']])?>"><span class="text-secondary">Ishlab chiqaruvchi korxona</span> <b class="text-uppercase text-primary"><?=\common\models\User::findOne($item['user_id'])->companyName?></b></a></p>
                    <p>Bozordagi Narxi <b><?=$item['price']?>  UZS</b></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
    .btn-outline-warning:hover{
        color: #fff;
    }
    .ho{
        margin: 20px;
        height: 80px;
        transition: 0.4s;
        border-radius: 3px;
        /*transform: rotateZ(5deg);*/
    }
    .ho:hover{
        transform: scaleX(1.2);
    }
</style>

