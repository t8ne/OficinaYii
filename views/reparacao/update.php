<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $reparacao app\models\Reparacao */

Yii::$app->view->title = 'Update Reparacao: ' . $reparacao->id;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Reparacoes', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = ['label' => $reparacao->id, 'url' => ['view', 'id' => $reparacao->id]];
Yii::$app->view->params['breadcrumbs'][] = 'Update';
?>
<div class="reparacao-update">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'reparacao' => $reparacao,
    ]) ?>

</div>
