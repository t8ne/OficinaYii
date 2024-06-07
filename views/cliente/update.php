<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $cliente app\models\Cliente */

Yii::$app->view->title = 'Update Cliente: ' . $cliente->Nome;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = ['label' => $cliente->Nome, 'url' => ['view', 'id' => $cliente->id]];
Yii::$app->view->params['breadcrumbs'][] = 'Update';
?>
<div class="cliente-update">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'cliente' => $cliente,
    ]) ?>

</div>
