<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $comprapecas app\models\Comprapecas */

Yii::$app->view->title = 'Create Comprapecas';
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Comprapecas', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="comprapecas-create">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'comprapecas' => $comprapecas,
    ]) ?>

</div>