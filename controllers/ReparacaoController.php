<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Reparacao;
use app\models\ReparacaoSearch;
use Yii;

class ReparacaoController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new ReparacaoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $reparacao = Reparacao::findOne($id);
        return $this->render('view', ['reparacao' => $reparacao]);
    }

    public function actionCreate()
    {
        $reparacao = new Reparacao();

        if ($reparacao->load(Yii::$app->request->post()) && $reparacao->save()) {
            return $this->redirect(['view', 'id' => $reparacao->id]);
        }

        return $this->render('create', ['reparacao' => $reparacao]);
    }

    public function actionUpdate($id)
    {
        $reparacao = Reparacao::findOne($id);

        if ($reparacao->load(Yii::$app->request->post()) && $reparacao->save()) {
            return $this->redirect(['view', 'id' => $reparacao->id]);
        }

        return $this->render('update', ['reparacao' => $reparacao]);
    }

    public function actionDelete($id)
    {
        $reparacao = Reparacao::findOne($id);
        $reparacao->delete();

        return $this->redirect(['index']);
    }
}
