<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $compra app\models\CompraPecas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($compra, 'Descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($compra, 'Quantidade')->textInput() ?>

    <?= $form->field($compra, 'Preco')->textInput() ?>

    <?= $form->field($compra, 'Pedido_id')->textInput() ?>

    <?= $form->field($compra, 'Pecas_id')->textInput() ?>

    <?= $form->field($compra, 'Fornecedor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($compra->isNewRecord ? 'Create' : 'Update', ['class' => $compra->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
