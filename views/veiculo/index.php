<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VeiculoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Yii::$app->view->title = 'Veiculos';
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="veiculo-index">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>
    <p>
        <?= Html::a('Create Veiculo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Matricula',
            'Cor',
            'Cliente_id',
            'Modelo_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
