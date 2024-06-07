<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $fornecedor app\models\Fornecedor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fornecedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($fornecedor, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($fornecedor, 'Telemovel')->textInput() ?>

    <?= $form->field($fornecedor, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($fornecedor, 'Morada')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($fornecedor->isNewRecord ? 'Create' : 'Update', ['class' => $fornecedor->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
