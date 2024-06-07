<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $funcionario app\models\Funcionario */

Yii::$app->view->title = $funcionario->Nome;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Funcionários', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="funcionario-view">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $funcionario->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $funcionario->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $funcionario,
        'attributes' => [
            'id',
            'Nome',
            'Cargo',
            'DataContratacao',
            'Salario',
        ],
    ]) ?>

</div>
