<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\News */

$this->title = Yii::t('app', 'Yangilash: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Yangiliklar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Yangilash');
?>
<div class="news-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
