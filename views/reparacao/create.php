<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $reparacao app\models\Reparacao */

Yii::$app->view->title = 'Create Reparacao';
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Reparacoes', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="reparacao-create">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'reparacao' => $reparacao,
    ]) ?>

</div>
