<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $reparacao app\models\Reparacao */

Yii::$app->view->title = $reparacao->id;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Reparacoes', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="reparacao-view">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $reparacao->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $reparacao->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $reparacao,
        'attributes' => [
            'id',
            'DataReparacao',
            'HoraReparacao',
            'Duracao',
            'Pedido_id',
            'Funcionario_id',
        ],
    ]) ?>

</div>
