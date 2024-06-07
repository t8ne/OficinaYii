<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Veiculo;
use app\models\VeiculoSearch;
use Yii;

class VeiculoController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new VeiculoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $veiculo = Veiculo::findOne($id);
        return $this->render('view', ['veiculo' => $veiculo]);
    }

    public function actionCreate()
    {
        $veiculo = new Veiculo();

        if ($veiculo->load(Yii::$app->request->post()) && $veiculo->save()) {
            return $this->redirect(['view', 'id' => $veiculo->id]);
        }

        return $this->render('create', ['veiculo' => $veiculo]);
    }

    public function actionUpdate($id)
    {
        $veiculo = Veiculo::findOne($id);

        if ($veiculo->load(Yii::$app->request->post()) && $veiculo->save()) {
            return $this->redirect(['view', 'id' => $veiculo->id]);
        }

        return $this->render('update', ['veiculo' => $veiculo]);
    }

    public function actionDelete($id)
    {
        $veiculo = Veiculo::findOne($id);
        $veiculo->delete();

        return $this->redirect(['index']);
    }
}
