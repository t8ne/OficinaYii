<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Modelo;
use app\models\ModeloSearch;
use Yii;

class ModeloController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new ModeloSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $modelo = Modelo::findOne($id);
        return $this->render('view', ['modelo' => $modelo]);
    }

    public function actionCreate()
    {
        $modelo = new Modelo();

        if ($modelo->load(Yii::$app->request->post()) && $modelo->save()) {
            return $this->redirect(['view', 'id' => $modelo->id]);
        }

        return $this->render('create', ['modelo' => $modelo]);
    }

    public function actionUpdate($id)
    {
        $modelo = Modelo::findOne($id);

        if ($modelo->load(Yii::$app->request->post()) && $modelo->save()) {
            return $this->redirect(['view', 'id' => $modelo->id]);
        }

        return $this->render('update', ['modelo' => $modelo]);
    }

    public function actionDelete($id)
    {
        $modelo = Modelo::findOne($id);
        $modelo->delete();

        return $this->redirect(['index']);
    }
}
