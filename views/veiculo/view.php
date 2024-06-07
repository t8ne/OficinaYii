<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $veiculo app\models\Veiculo */

Yii::$app->view->title = $veiculo->Matricula;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Veiculos', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="veiculo-view">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $veiculo->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $veiculo->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $veiculo,
        'attributes' => [
            'id',
            'Matricula',
            'Cor',
            'Cliente_id',
            'Modelo_id',
        ],
    ]) ?>

</div>
