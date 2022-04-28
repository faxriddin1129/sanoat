<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \frontend\models\Production */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Maxsulotlar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'O`chirish'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'price',
            [
                'attribute'=>'category_id',
                'format'=>'raw',
                'value'=>function($model){
                    return \common\models\Category::findOne($model->category_id)->name;
                }
            ],
            'created_at',
            'description',
            [
                'attribute'=>'img_1',
                'format'=>'raw',
                'value'=>function($model){
                    return "<p><img width='300px' height='300px' src='/img/$model->img_1'</p>";
                }
            ],
            [
                'attribute'=>'img_2',
                'format'=>'raw',
                'value'=>function($model){
                    return "<p><img width='300px' height='300px' src='/img/$model->img_2'</p>";
                }
            ],
        ],
    ]) ?>


    <?php if ($model->status == 0): ?>
        <a href="<?=\yii\helpers\Url::to(['production/permission','id'=>$model->id])?>" class="btn btn-warning mb-5">Ruxsat Berish</a>
    <?php endif; ?>
    <?php if ($model->status == 1): ?>
        <a class="btn btn-success disabled mb-5">Ruxsat Berilgan</a>
    <?php endif; ?>
</div>
