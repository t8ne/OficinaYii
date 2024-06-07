<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $pedido app\models\Pedido */

Yii::$app->view->title = $pedido->Descricao;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="pedido-view">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $pedido->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $pedido->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $pedido,
        'attributes' => [
            'id',
            'Estado',
            'PrecoMaoObra',
            'Descricao',
            'PrecoTotal',
            'Veiculo_id',
        ],
    ]) ?>

</div>