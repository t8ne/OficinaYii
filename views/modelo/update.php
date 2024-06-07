<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $modelo app\models\Modelo */

Yii::$app->view->title = 'Update Modelo: ' . $modelo->Marca;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Modelos', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = ['label' => $modelo->Marca, 'url' => ['view', 'id' => $modelo->id]];
Yii::$app->view->params['breadcrumbs'][] = 'Update';
?>
<div class="modelo-update">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'modelo' => $modelo,
    ]) ?>

</div>
