<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $fornecedor app\models\Fornecedor */

Yii::$app->view->title = 'Create Fornecedor';
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Fornecedores', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="fornecedor-create">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'fornecedor' => $fornecedor,
    ]) ?>

</div>