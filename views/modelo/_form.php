<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $modelo app\models\Modelo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modelo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($modelo, 'Marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($modelo, 'Ano')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($modelo->isNewRecord ? 'Create' : 'Update', ['class' => $modelo->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>