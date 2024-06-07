<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $funcionario app\models\Funcionario */

Yii::$app->view->title = 'Create Funcionario';
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Funcionários', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="funcionario-create">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'funcionario' => $funcionario,
    ]) ?>

</div>
