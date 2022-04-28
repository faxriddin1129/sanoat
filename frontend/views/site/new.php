<?php

/* @var $this yii\web\View */
/* @var $data \backend\controllers\SiteController */

$this->title = 'Yangiliklar';
$this->params['breadcrumbs'][] = $this->title;

$datum = $data;
?>

<div class="container" style="margin-top: 100px; margin-bottom: 50px">

    <div class="row pt-3 pb-3 border border-primary" style="border-radius: 10px;">
        <div class="col-md-5">
            <img class="img-thumbnail" src="/img/<?=$datum['img']?>" alt="News">
        </div>
        <div class="col-md-7">
            <h4 class="text-center text-black font-weight-bolder"><?=$datum['title']?></h4>
            <p class="text-justify">
                <?=$datum['description']?>
            </p>
            <br>
            <br>
            <h6 class="text-center text-primary"><?=$datum['news_date']?></h6>
        </div>
    </div>

</div>


