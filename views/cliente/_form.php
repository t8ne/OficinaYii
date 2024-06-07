<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $cliente app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($cliente, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($cliente, 'Telemovel')->textInput() ?>

    <?= $form->field($cliente, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($cliente, 'Morada')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($cliente->isNewRecord ? 'Create' : 'Update', ['class' => $cliente->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
