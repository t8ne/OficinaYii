<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $cliente app\models\Cliente */

Yii::$app->view->title = 'Create Cliente';
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="cliente-create">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'cliente' => $cliente,
    ]) ?>

</div>
