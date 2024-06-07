<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Funcionario;
use app\models\FuncionarioSearch;
use Yii;

class FuncionarioController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new FuncionarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $funcionario = Funcionario::findOne($id);
        return $this->render('view', ['funcionario' => $funcionario]);
    }

    public function actionCreate()
    {
        $funcionario = new Funcionario();

        if ($funcionario->load(Yii::$app->request->post()) && $funcionario->save()) {
            return $this->redirect(['view', 'id' => $funcionario->id]);
        }

        return $this->render('create', ['funcionario' => $funcionario]);
    }

    public function actionUpdate($id)
    {
        $funcionario = Funcionario::findOne($id);

        if ($funcionario->load(Yii::$app->request->post()) && $funcionario->save()) {
            return $this->redirect(['view', 'id' => $funcionario->id]);
        }

        return $this->render('update', ['funcionario' => $funcionario]);
    }

    public function actionDelete($id)
    {
        $funcionario = Funcionario::findOne($id);
        $funcionario->delete();

        return $this->redirect(['index']);
    }
}
