<?php

/* @var $this yii\web\View */
/* @var $data yii\web\View */

$this->title = 'Yangiliklar';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container" style="margin-top: 100px;">

    <div class="row">
        <h3 class="text-uppercase text-primary border-bottom border-primary">Yangiliklar</h3>
    </div>

    <?php foreach ($data as $datum): ?>
    <div class="row border-warning border-bottom pt-3 pb-3">
        <div class="col-md-5">
            <img class="img-thumbnail" src="/img/<?=$datum['img']?>" alt="News">
        </div>
        <div class="col-md-7">
            <h4 class="text-center"><?=$datum['title']?></h4>
            <p class="text-justify" style="overflow: hidden; height: 188px">
                <?=$datum['description']?>
            </p>
            <a href="<?=\yii\helpers\Url::to(['site/new','id'=>$datum['id']])?>" class="btn btn-primary text-white">Batafsil</a>
            <br>
            <br>
            <h6 class="alert"><?=$datum['news_date']?></h6>
        </div>
    </div>
    <?php endforeach; ?>

</div>


