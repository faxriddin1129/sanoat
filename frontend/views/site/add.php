<?php

/* @var $this yii\web\View */
/* @var $model \frontend\controllers\SiteController */

use frontend\models\Cate;
use frontend\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Industrial Sector';

?>

<div class="container p-5" style="margin-top: 70px">
    <div class="row">
        <h4 class="text-primary">Maxsulot kiritish</h4>
        <div class="col-md-8">
            <div class="form">
                <?php $form = ActiveForm::begin() ?>

                <?= $form->field($model, 'name')->textInput(['placeholder'=>'Maxsulot Nomi...'])->label('Maxsulot nomi') ?>

                <?= $form->field($model, 'price')->Input('number',['placeholder'=>'Maxsulot Narxi...'])->label('Maxsulot Narxi') ?>

                <?= $form->field($model, 'user_id')->input('hidden',['value'=>Yii::$app->user->getId()])->label(false) ?>

                <?= $form->field($model, 'description')->textarea(['placeholder'=>'Tavsifi...','rows'=>8])->label('Tavsif') ?>

            </div>
        </div>
        <div class="col-md-4">
            <div class="form">

                <?= $form->field($model, 'category_id')
                    ->dropDownList(
                        ArrayHelper::map(Category::find()->all(),'id','name'),
                        [
                            'prompt'=>'Tanlang',
                            'onchange' => '
                            onChange($(this).val(),)'])->label('Kategoriya') ?>

                <?= $form->field($model, 'cate_id')->dropDownList([],['prompt'=>'Tanlang', 'id' => 'cate_id',])->label('Yo`nalish') ?>

                <br>
                <?= $form->field($model, 'img_1')->fileInput(['placeholder'=>'Rasm...','rows'=>8])->label('Rasm') ?>
                <br>
                <?= $form->field($model, 'img_2')->fileInput(['placeholder'=>'Rasm...','rows'=>8])->label('Rasm') ?>
                <br>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-primary text-white']) ?>
                </div>

                <?php $form = ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>

<?php
if(Yii::$app->session->hasFlash('danger')): ?>
    <div class="container">
        <div class="ror">
            <div class="alert-danger alert">
                <?php echo Yii::$app->session->getFlash('danger'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<style>
    .help-block{
        color: red;
    }
</style>

<script>

    const selectDrop = document.getElementById('cate_id')

    function onChange(id) {

        selectDrop.options.length=0;

        fetch('/site/cates?category_id='+id).then(res => {
            return res.json()
        }).then(data => {
            let output = ""
            output += `<option value="">Tanlang</option>`
            data.forEach(values => {
                output += `<option value="${values.id}">${values.name}</option>`
            })
            selectDrop.innerHTML = output
        }).catch(err => {
            console.log(err)
        })
    }

</script>