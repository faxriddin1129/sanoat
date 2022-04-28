<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Bog\'lanish';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="contact" class="contact" style="margin-top: 50px">
    <div class="container" data-aos="fade-up">

    <div class=" section-title">
        <h2>Bog'lanish</h2>
        <p>Bog'lanish</p>
    </div>

    <div class="row">

        <div class="col-lg-6">

            <div class="row">
                <div class="col-md-12">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Manzilimiz</h3>
                        <p>Qashqadaryo,Qarshi,Mustaqillik,22</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@example.com<br>contact@example.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Telfon</h3>
                        <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true,'placeholder'=>'Ismingiz...'])->label('Ism') ?>
                    </div>
                    <div class="col-md-6 form-group">
                        <?= $form->field($model, 'email')->textInput(['placeholder'=>'Emailingiz...']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'subject')->textInput(['placeholder'=>'Sababni ko`rsating...'])->label('Sabab') ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'body')->textarea(['rows' => 9,'placeholder'=>'Tavsif...'])->label('Tavsif') ?>
                </div>
<!--                <div class="my-3">-->
<!--                    --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                    ])->label('Tsadiqlash kodi') ?>
<!--                </div>-->
                <div class="text-center"><?= Html::submitButton('Yuborish', ['class' => 'btn btn-primary text-white', 'name' => 'contact-button']) ?></div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>

    </div>
</section>