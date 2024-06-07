<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $veiculo app\models\Veiculo */

Yii::$app->view->title = 'Update Veiculo: ' . $veiculo->Matricula;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Veiculos', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = ['label' => $veiculo->Matricula, 'url' => ['view', 'id' => $veiculo->id]];
Yii::$app->view->params['breadcrumbs'][] = 'Update';
?>
<div class="veiculo-update">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'veiculo' => $veiculo,
    ]) ?>

</div>
