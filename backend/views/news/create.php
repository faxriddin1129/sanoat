<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\News */

$this->title = Yii::t('app', 'Yangilik qo`shish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Yangiliklar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
