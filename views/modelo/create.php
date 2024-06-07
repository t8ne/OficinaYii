<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $modelo app\models\Modelo */

Yii::$app->view->title = 'Create Modelo';
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Modelos', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="modelo-create">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'modelo' => $modelo,
    ]) ?>

</div>
