<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PecasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Yii::$app->view->title = 'Peças';
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="pecas-index">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>
    <p>
        <?= Html::a('Create Peça', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Descricao',
            'Preco',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
