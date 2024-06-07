<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $pecas app\models\Pecas */

Yii::$app->view->title = 'Update Pecas: ' . $pecas->Descricao;
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Pecas', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = ['label' => $pecas->Descricao, 'url' => ['view', 'id' => $pecas->id]];
Yii::$app->view->params['breadcrumbs'][] = 'Update';
?>
<div class="pecas-update">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'pecas' => $pecas,
    ]) ?>

</div>
