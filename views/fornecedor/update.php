<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $fornecedor app\models\Fornecedor */

Yii::$app->view->title = 'Update Fornecedor: ' . $fornecedor->Nome;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Fornecedores', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = ['label' => $fornecedor->Nome, 'url' => ['view', 'id' => $fornecedor->id]];
Yii::$app->view->params['breadcrumbs'][] = 'Update';
?>
<div class="fornecedor-update">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'fornecedor' => $fornecedor,
    ]) ?>

</div>