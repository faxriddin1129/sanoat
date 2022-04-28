<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Ro\'yxatdan O\'tish';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
<div class="container" style="margin-top: 100px">
    <h3 class="border-bottom border-primary text-primary"><?= Html::encode($this->title) ?></h3>
    <p>Ro'yxatdan o'ting va ko'proq imkoniyatga ega o'ling.</p>
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="row">
                <div class="col-lg-12 justify-content-center">
                    <?= $form->field($model, 'username')->textInput(['placeholder'=>'Username...']) ?>
                    <?= $form->field($model, 'fullName')->textInput(['placeholder'=>'Ism Familiyangiz...'])->label('Ism Familiyangiz') ?>
                    <?= $form->field($model, 'jins')->dropdownList(['Erkak'=>'Erkak','Ayol'=>'Ayol'],['prompt'=>'Jinsingiz'])->label('Jinsingiz') ?>
                    <?= $form->field($model, 'brithday')->input('date',['placeholder'=>'Tug`ilgan yilingiz...'])->label('Tug`ilgan yilingiz') ?>
                    <?= $form->field($model, 'email')->textInput(['placeholder'=>'Emailingiz...']) ?>
                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Parol...']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="row">
                <div class="col-lg-12 justify-content-center">
                    <?= $form->field($model, 'companyType')->dropdownList([
                            'KIMYO VA NEFTKIMYO SANOATI'=>'KIMYO VA NEFTKIMYO SANOATI',
                            'MUHANDISLIK, METAL VA ISHLAB CHIQARISH'=>'MUHANDISLIK, METAL VA ISHLAB CHIQARISH',
                            'YENGIL SANOAT'=>'YENGIL SANOAT',
                            'OZIQ-OVQAT SANOATI'=>'OZIQ-OVQAT SANOATI',
                            'ENERGIYA SANOATI'=>'ENERGIYA SANOATI',
                            'O`MON XO`JALIGI, YOG`OCHINI QAYTA ISHLASH VA SELLYULOZA-QOG`OZ SANOATI'=>'O`MON XO`JALIGI, YOG`OCHINI QAYTA ISHLASH VA SELLYULOZA-QOG`OZ SANOATI',
                        ]
                        ,['prompt'=>'Tanlang'])->label('Korxona Turi') ?>
                    <?= $form->field($model, 'companyName')->textInput(['placeholder'=>'Korxona Nomi...'])->label('Korxona Nomi') ?>
                    <?= $form->field($model, 'companyHistory')->input('number',['placeholder'=>'Korxona Ishfoaliyatiga qancha yil bo`ldi...'])->label('Korxona Ishfoaliyatiga qancha yil bo`ldi') ?>
                    <br>
                    <div class="form-group">
                        <?= Html::submitButton('Yuborish', ['class' => 'btn btn-primary text-white', 'name' => 'signup-button']) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 justify-content-center">
            <?= $form->field($model, 'company_about')->textarea(['placeholder'=>'Korxona Haqida Batafsil...','rows'=>12])->label('Korxona Haqida Batafsil') ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>