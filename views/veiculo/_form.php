<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $veiculo app\models\Veiculo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="veiculo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($veiculo, 'Matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($veiculo, 'Cor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($veiculo, 'Cliente_id')->textInput() ?>

    <?= $form->field($veiculo, 'Modelo_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($veiculo->isNewRecord ? 'Create' : 'Update', ['class' => $veiculo->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>