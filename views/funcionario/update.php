<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $funcionario app\models\Funcionario */

Yii::$app->view->title = 'Update Funcionario: ' . $funcionario->Nome;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Funcionários', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = ['label' => $funcionario->Nome, 'url' => ['view', 'id' => $funcionario->id]];
Yii::$app->view->params['breadcrumbs'][] = 'Update';
?>
<div class="funcionario-update">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'funcionario' => $funcionario,
    ]) ?>

</div>
