<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $cliente app\models\Cliente */

Yii::$app->view->title = $cliente->Nome;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="cliente-view">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $cliente->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $cliente->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $cliente,
        'attributes' => [
            'id',
            'Nome',
            'Telemovel',
            'Email:email',
            'Morada:ntext',
        ],
    ]) ?>

</div>
