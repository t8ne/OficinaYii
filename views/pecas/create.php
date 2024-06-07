<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $pecas app\models\Pecas */

Yii::$app->view->title = 'Create Pecas';
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Pecas', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="pecas-create">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'pecas' => $pecas,
    ]) ?>

</div>
