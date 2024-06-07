<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PedidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Yii::$app->view->title = 'Pedidos';
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="pedido-index">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>
    <p>
        <?= Html::a('Create Pedido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Estado',
            'PrecoMaoObra',
            'Descricao',
            'PrecoTotal',
            'Veiculo_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
