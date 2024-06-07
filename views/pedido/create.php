<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $modelo app\models\Modelo */

Yii::$app->view->title = $modelo->Marca;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Modelos', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="modelo-view">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $modelo->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $modelo->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $modelo,
        'attributes' => [
            'id',
            'Marca',
            'Ano',
        ],
    ]) ?>

</div>
