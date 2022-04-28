<?php

$this->title = 'Hududiy Miqyosda';

$data = $productions = \frontend\models\Production::find()->where(['user_id'=>Yii::$app->user->getId()])->all();
?>


<div class="container" style="margin-top: 100px;">
    <div class="row pt-3 pb-3">
        <div class="col-md-12">
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
        </div>
        <div class="col-md-12">
            <h3 class="text-primary text-uppercase text-center font-weight-bolder"><?=Yii::$app->user->identity->companyName?></h3>
            <div class="row pt-3">
                <div class="col-md-4 mr-2">
                    <table class="table p-3 table-bordered">
                        <tr>
                            <thIsm Familiya</th>
                            <th><?=Yii::$app->user->identity->fullName?></th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th><?=Yii::$app->user->identity->email?></th>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <th><?=Yii::$app->user->identity->username?></th>
                        </tr>
                        <tr>
                            <th>Faoliyati</th>
                            <th><?=Yii::$app->user->identity->companyHistory?> Yil</th>
                        </tr>
                    </table>
                    <br>
                    <a href="<?=\yii\helpers\Url::to(['site/add'])?>" class="btn btn-primary text-white">Maxsulot qo'shish</a>
                </div>
                <div class="col-md-7">
                    <table class="table  p-5 ">
                        <tr><th class="p-3" style="letter-spacing: 3px;"><?=Yii::$app->user->identity->company_about?></th></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container"  style="margin-bottom: 50px;">
    <div class="title h3 text-center text-primary">Korxona Maxsulotlari</div>

    <?php foreach ($productions as $production): ?>
    <!-- Card Start -->
    <div class="card">
        <div class="row">

            <div style="max-height: 300px" class="col-md-8 px-3">
                <div class="card-block px-6">
                    <h4 class="card-title text-primary font-weight-bolder"><?=$production['name']?></h4>
                    <p class="card-text">Narxi : <b><?=$production['price']?> UZS</b></p>
                    <p class="card-text"><?=$production['description']?></p>
                    <p class="card-text"><?=$production['created_at']?></p>
                    <p class="card-text"><?=\common\models\Category::findOne($production['category_id'])->name?></p>
                    <p class="card-text">Xolati: <b style="color: red;"><?php if ($production['status'] == 0){echo "Faol emas";} ?> </b>  <b style="color: green"><?php if ($production['status'] == 1){echo "Faol";} ?></b></p>
                </div>
            </div>
            <!-- Carousel start -->
            <div style="max-height: 300px" class="col-md-4">
                <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                        <li data-target="#CarouselTest" data-slide-to="1"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="height: 300px;" class="d-block w-100 img-fluid img-thumbnail" src="/img/<?=$production['img_1']?>" alt="">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 300px;" class="d-block w-100 img-fluid img-thumbnail" src="/img/<?=$production['img_2']?>" alt="">
                        </div>
                        <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End of carousel -->
        </div>
    </div>
    <!-- End of card -->
    <?php endforeach; ?>

</div>

<style>
    .title {

        margin-bottom: 50px;
        text-transform: uppercase;
    }

    .card-block {
        font-size: 1em;
        position: relative;
        margin: 0;
        padding: 1em;
        border: none;
        border-top: 1px solid rgba(34, 36, 38, .1);
        box-shadow: none;

    }
    .card {
        font-size: 1em;
        overflow: hidden;
        border: none;
        border-radius: .28571429rem;
        box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
        margin-top:20px;
    }

    .carousel-indicators li {
        border-radius: 12px;
        width: 12px;
        height: 12px;
        background-color: #404040;
    }
    .carousel-indicators li {
        border-radius: 12px;
        width: 12px;
        height: 12px;
        background-color: #404040;
    }
    .carousel-indicators .active {
        background-color: white;
        max-width: 12px;
        margin: 0 3px;
        height: 12px;
    }
    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
    }
    lex-direction: column;
    }

    .btn {
        margin-top: auto;
    }
</style>



