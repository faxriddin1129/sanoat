<?php

namespace backend\controllers;

use backend\models\ProductionSearch;
use backend\models\Productions;
use Yii;
use yii\web\NotFoundHttpException;

class ProductionController extends BlockController
{

    public function actionIndex(){
        $searchModel = new ProductionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionPermission($id){
        $model =  $this->findModel($id);
        $model->status =1;
        $model->save();
        return $this->redirect('index');
    }

    protected function findModel($id)
    {
        if (($model = Productions::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

}