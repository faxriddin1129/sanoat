<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Kirish';
$this->params['breadcrumbs'][] = $this->title;
$news = \frontend\models\News::find()->where(['status'=>1])->limit(3)->all();
?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-primary border-bottom border-primary"><?= Html::encode($this->title) ?></h3>

            <p>Login va Parolingizni Kiriting:</p>

            <div class="row">
                <div class="col-lg-12">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'Username...']) ?>
                    <br>
                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Parol...']) ?>
                    <br>
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    <a style="color: #0a53be" href="<?=\yii\helpers\Url::to(['site/signup'])?>">Menda Akkaunt Yoq!</a>
                    <br>
                    <br>
                    <div class="form-group">
                        <?= Html::submitButton('Kirish', ['class' => 'btn btn-primary text-white', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4 col-12  pt-4 mb-2" >
            <h4 class="text-uppercase mb-4 text-center text-primary">Yangiliklar</h4>
            <?php foreach ($news as $new):?>
            <div class="col-md-12 row mt-3 mb-4 p-3 mb-3 bg-primary">
                <div class="col-md-4 p-0">
                    <img src="/img/<?=$new['img']?>" width="100%">
                </div>
                <div class="col-md-8 pr-0">
                    <p class="m-0 text-white"><?=$new['news_date']?></p>
                    <a href="<?=\yii\helpers\Url::to(['site/new','id'=>$new['id']])?>" style="color: white"><b><?=$new['title']?></b></a>
                </div>
            </div><hr>
            <?php endforeach;   ?>
            </div>
        </div>
    </div>
</div>
