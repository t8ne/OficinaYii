<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $pedido app\models\Pedido */

Yii::$app->view->title = 'Create Pedido';
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="pedido-create">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'pedido' => $pedido,
    ]) ?>

</div>