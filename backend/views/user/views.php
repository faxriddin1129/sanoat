<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \backend\models\User */

$this->title = $model->fullName;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Azolar'), 'url' => ['index']];
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
            'username',
            'fullName',
            'brithday',
            'jins',
            'email',
            'companyType',
            'companyName',
            'companyHistory',
            'company_about',
        ],
    ]) ?>


    <?php if ($model->status == 9): ?>
        <a href="<?=\yii\helpers\Url::to(['user/permission','id'=>$model->id])?>" class="btn btn-warning mb-5">Ruxsat Berish</a>
    <?php endif; ?>
    <?php if ($model->status == 10): ?>
        <a class="btn btn-success disabled mb-5">Ruxsat Berilgan</a>
    <?php endif; ?>
</div>
