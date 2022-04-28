<?php


/* @var $this yii\web\View */
/* @var $category_id \frontend\controllers\SiteController */
/* @var $cate_id \frontend\controllers\SiteController */
/* @var $model \frontend\controllers\SiteController */


use frontend\models\Cate;
use frontend\models\Category;
use frontend\models\Production;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Trade in Industrial';
$data = Production::find()->where(['status'=>1])->all();
$tit = Category::findOne($category_id)->name;


?>

<div class="container" style="margin-top: 100px">
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="row mb-5">
            <div class="col-md-12 pb-4 pt-1">
                <h3 class="text-uppercase text-center text-primary pb-3"><?=$tit?></h3>
            </div>
            <div class="col-md-5">
                <?= $form->field($model, 'category_id')
                    ->dropDownList(
                        ArrayHelper::map(Category::find()->all(),'id','name'),
                        [
                            'prompt'=>'Tanlang',
                            'onchange' => '
                            onChange($(this).val(),)'])->label('Sanoat Maxsulotlari Kategoriyasi') ?>
            </div>
            <div class="col-md-5">
                <?= $form->field($model, 'cate_id')->dropDownList([],['prompt'=>'Tanlang', 'id' => 'cate_id',])->label('Yo`nalish Tarkibi') ?>
            </div>
            <div class="col-md-6">
                <?= Html::submitButton('Ko`rish', ['class' => 'btn btn-primary text-white', 'name' => 'login-button']) ?>
            </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<?php if ($cate_id == ''): ?>
<div class="container mb-5">
    <div class="row">
        <?php foreach ($data as $item): ?>
            <div class="col-md-3 mb-3 col-12 card ml-3">
                <img class="card-img-top img-fluid img-thumbnail h-50 mt-2" src="/img/<?=$item['img_1']?> " alt="">
                <div class="card-body">
                    <h4 class="text-dark"><?=$item['name']?></h4>
                    <p><a href="<?=\yii\helpers\Url::to(['site/views','id'=>$item['id']])?>"><span class="text-secondary">Ishlab chiqaruvchi korxona</span> <b class="text-uppercase text-primary"><?=\common\models\User::findOne($item['user_id'])->companyName?></b></a></p>
                    <p>Bozordagi Narxi <b><?=$item['price']?>  UZS</b></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>


<?php if ($cate_id != ''): ?>
<?php $dataC = Production::find()->where(['status'=>1,'cate_id'=>$cate_id])->all(); ?>
    <div class="container mb-5">
        <div class="row">
            <h3 class="text-uppercase text-center text-primary pb-3"><?=Cate::findOne($cate_id)->name?></h3>
            <?php foreach ($dataC as $item): ?>
                <div class="col-md-3 mb-3 col-12 card ml-3">
                    <img class="card-img-top img-fluid img-thumbnail w-100 h-50 mt-2" src="/img/<?=$item['img_1']?> " alt="">
                    <div class="card-body">
                        <h4 class="text-dark"><?=$item['name']?></h4>
                        <p><a href="<?=\yii\helpers\Url::to(['site/views','id'=>$item['id']])?>"><span class="text-secondary">Ishlab chiqaruvchi korxona</span> <b class="text-uppercase text-primary"><?=\common\models\User::findOne($item['user_id'])->companyName?></b></a></p>
                        <p>Bozordagi Narxi <b><?=$item['price']?>  UZS</b></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<style>
    .btn-outline-warning:hover{
        color: #fff;
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
            output += `<option value="">Hamma yo'nalish bo'yicha</option>`
            data.forEach(values => {
                output += `<option value="${values.id}">${values.name}</option>`
            })
            selectDrop.innerHTML = output
        }).catch(err => {
            console.log(err)
        })
    }

</script>
