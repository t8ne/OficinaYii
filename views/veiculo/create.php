<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $veiculo app\models\Veiculo */

Yii::$app->view->title = 'Create Veiculo';
Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Veiculos', 'url' => ['index']];
Yii::$app->view->params['breadcrumbs'][] = Yii::$app->view->title;
?>
<div class="veiculo-create">

    <h1><?= Html::encode(Yii::$app->view->title) ?></h1>

    <?= Yii::$app->controller->renderPartial('_form', [
        'veiculo' => $veiculo,
    ]) ?>

</div>
