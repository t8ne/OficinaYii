<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Pecas;
use app\models\PecasSearch;
use Yii;

class PecasController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new PecasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $peca = Pecas::findOne($id);
        return $this->render('view', ['peca' => $peca]);
    }

    public function actionCreate()
    {
        $peca = new Pecas();

        if ($peca->load(Yii::$app->request->post()) && $peca->save()) {
            return $this->redirect(['view', 'id' => $peca->id]);
        }

        return $this->render('create', ['peca' => $peca]);
    }

    public function actionUpdate($id)
    {
        $peca = Pecas::findOne($id);

        if ($peca->load(Yii::$app->request->post()) && $peca->save()) {
            return $this->redirect(['view', 'id' => $peca->id]);
        }

        return $this->render('update', ['peca' => $peca]);
    }

    public function actionDelete($id)
    {
        $peca = Pecas::findOne($id);
        $peca->delete();

        return $this->redirect(['index']);
    }
}
