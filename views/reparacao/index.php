<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReparacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Yii::$app->view->title = 'Reparações';
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="reparacao-index">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>
    <p>
        <?= Html::a('Create Reparação', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'DataReparacao',
            'HoraReparacao',
            'Duracao',
            'Pedido_id',
            'Funcionario_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
