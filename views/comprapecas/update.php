<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $comprapecas app\models\Comprapecas */

Yii::$app->view->title = 'Update Comprapecas: ' . $comprapecas->Descricao;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Comprapecas', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = ['label' => $comprapecas->Descricao, 'url' => ['view', 'id' => $comprapecas->id]];
Yii::$app->view->params['breadcrumbs'][] = 'Update';
?>
<div class="comprapecas-update">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'comprapecas' => $comprapecas,
    ]) ?>

</div>
