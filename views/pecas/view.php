<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $pecas app\models\Pecas */

Yii::$app->view->title = $pecas->Descricao;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Pecas', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="pecas-view">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $pecas->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $pecas->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $pecas,
        'attributes' => [
            'id',
            'Descricao',
            'Preco',
        ],
    ]) ?>

</div>
