<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Fornecedor;
use app\models\FornecedorSearch;
use Yii;

class FornecedorController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new FornecedorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $fornecedor = Fornecedor::findOne($id);
        return $this->render('view', ['fornecedor' => $fornecedor]);
    }

    public function actionCreate()
    {
        $fornecedor = new Fornecedor();

        if ($fornecedor->load(Yii::$app->request->post()) && $fornecedor->save()) {
            return $this->redirect(['view', 'id' => $fornecedor->id]);
        }

        return $this->render('create', ['fornecedor' => $fornecedor]);
    }

    public function actionUpdate($id)
    {
        $fornecedor = Fornecedor::findOne($id);

        if ($fornecedor->load(Yii::$app->request->post()) && $fornecedor->save()) {
            return $this->redirect(['view', 'id' => $fornecedor->id]);
        }

        return $this->render('update', ['fornecedor' => $fornecedor]);
    }

    public function actionDelete($id)
    {
        $fornecedor = Fornecedor::findOne($id);
        $fornecedor->delete();

        return $this->redirect(['index']);
    }
}
