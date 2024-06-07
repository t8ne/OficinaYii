<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuncionarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

Yii::$app->view->title = 'Funcionários';
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="funcionario-index">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>
    <p>
        <?= Html::a('Create Funcionario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Nome',
            'Cargo',
            'DataContratacao',
            'Salario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
