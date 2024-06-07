<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $comprapecas app\models\Comprapecas */

Yii::$app->view->title = $comprapecas->Descricao;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Comprapecas', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="comprapecas-view">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $comprapecas->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $comprapecas->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $comprapecas,
        'attributes' => [
            'id',
            'Descricao',
            'Quantidade',
            'Preco',
            'Pedido_id',
            'Pecas_id',
            'Fornecedor_id',
        ],
    ]) ?>

</div>
