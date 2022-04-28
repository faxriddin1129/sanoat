<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xabarlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1 style="color: #000;"><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'email:email',
            'subject',
            [
                'attribute'=>'status',
                'format'=>'raw',
                'value'=>function($model){
                    if ($model->status == 0){
                        return "<span style='color: green; font-weight: bolder;'>Yangi</span>";
                    }
                    return "<span style='font-weight: bolder;'>O`qilgan</span>";
                }
            ],
            'created_at',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view}',
                'buttons'=>[
                    'view'=> function($url , $model , $key){
                        return Html::a ( '<span>Ko`rish</span>', ['contact/view', 'id' => $model->id] , ['class'=>'btn-info btn'] );
                    },
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
