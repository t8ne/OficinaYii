<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Comprapecas;
use app\models\ComprapecasSearch;
use Yii;

class ComprapecasController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new ComprapecasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $compra = Comprapecas::findOne($id);
        return $this->render('view', ['compra' => $compra]);
    }

    public function actionCreate()
    {
        $compra = new Comprapecas();

        if ($compra->load(Yii::$app->request->post()) && $compra->save()) {
            return $this->redirect(['view', 'id' => $compra->id]);
        }

        return $this->render('create', ['compra' => $compra]);
    }

    public function actionUpdate($id)
    {
        $compra = Comprapecas::findOne($id);

        if ($compra->load(Yii::$app->request->post()) && $compra->save()) {
            return $this->redirect(['view', 'id' => $compra->id]);
        }

        return $this->render('update', ['compra' => $compra]);
    }

    public function actionDelete($id)
    {
        $compra = Comprapecas::findOne($id);
        $compra->delete();

        return $this->redirect(['index']);
    }
}
