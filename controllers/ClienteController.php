<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Cliente;
use app\models\ClienteSearch; // Add this line
use Yii;

class ClienteController extends Controller
{
    public function actionIndex()
    {
        // Create the search model and data provider
        $searchModel = new ClienteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // Pass them to the view
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $cliente = Cliente::findOne($id);
        return $this->render('view', ['cliente' => $cliente]);
    }

    public function actionCreate()
    {
        $cliente = new Cliente();

        if ($cliente->load(Yii::$app->request->post()) && $cliente->save()) {
            return $this->redirect(['view', 'id' => $cliente->id]);
        }

        return $this->render('create', ['cliente' => $cliente]);
    }

    public function actionUpdate($id)
    {
        $cliente = Cliente::findOne($id);

        if ($cliente->load(Yii::$app->request->post()) && $cliente->save()) {
            return $this->redirect(['view', 'id' => $cliente->id]);
        }

        return $this->render('update', ['cliente' => $cliente]);
    }

    public function actionDelete($id)
    {
        $cliente = Cliente::findOne($id);
        $cliente->delete();

        return $this->redirect(['index']);
    }
}
