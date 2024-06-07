<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Pedido;
use app\models\PedidoSearch;
use Yii;

class PedidoController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new PedidoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $pedido = Pedido::findOne($id);
        return $this->render('view', ['pedido' => $pedido]);
    }

    public function actionCreate()
    {
        $pedido = new Pedido();

        if ($pedido->load(Yii::$app->request->post()) && $pedido->save()) {
            return $this->redirect(['view', 'id' => $pedido->id]);
        }

        return $this->render('create', ['pedido' => $pedido]);
    }

    public function actionUpdate($id)
    {
        $pedido = Pedido::findOne($id);

        if ($pedido->load(Yii::$app->request->post()) && $pedido->save()) {
            return $this->redirect(['view', 'id' => $pedido->id]);
        }

        return $this->render('update', ['pedido' => $pedido]);
    }

    public function actionDelete($id)
    {
        $pedido = Pedido::findOne($id);
        $pedido->delete();

        return $this->redirect(['index']);
    }
}
