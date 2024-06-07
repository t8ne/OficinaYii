<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComprapecasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Yii::$app->view->title = 'Compras de Peças';
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="comprapecas-index">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>
    <p>
        <?= Html::a('Create Compra de Peças', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Descricao',
            'Quantidade',
            'Preco',
            'Pedido_id',
            'Pecas_id',
            'Fornecedor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
