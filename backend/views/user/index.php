<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ro`yxatdan o`tganlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1 style="color: #000;"><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'options'=>['class'=>'table-sm'],
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fullName',
            'companyName',
            'companyHistory',
            [
                'attribute'=>'status',
                'format'=>'raw',
                'value'=>function($model){
                    if ($model->status == 9){
                        return "<span style='color: green; font-weight: bolder;'>Yangi</span>";
                    }
                    return "<span style='font-weight: bolder;'>Ruxsat berilgan</span>";
                }
            ],
            'brithday',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}',
                'buttons'=>[
                    'view'=> function($url , $model , $key){
                        return Html::a ( '<span>Ko`rish</span>', ['user/view', 'id' => $model->id] , ['class'=>'btn-info btn'] );
                    },
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

