<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $funcionario app\models\Funcionario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="funcionario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($funcionario, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($funcionario, 'Cargo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($funcionario, 'DataContratacao')->textInput() ?>

    <?= $form->field($funcionario, 'Salario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($funcionario->isNewRecord ? 'Create' : 'Update', ['class' => $funcionario->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>