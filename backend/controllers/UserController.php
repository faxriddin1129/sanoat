<?php

namespace backend\controllers;

use backend\models\User;
use backend\models\UserSearch;
use Yii;
use yii\web\NotFoundHttpException;

class UserController extends BlockController
{

    public function actionIndex(){
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('views', [
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
        $model->status = 10;
        $model->save();
        return $this->redirect('index');
    }

    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

}