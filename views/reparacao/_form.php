<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $reparacao app\models\Reparacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reparacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($reparacao, 'DataReparacao')->textInput() ?>

    <?= $form->field($reparacao, 'HoraReparacao')->textInput() ?>

    <?= $form->field($reparacao, 'Duracao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($reparacao, 'Pedido_id')->textInput() ?>

    <?= $form->field($reparacao, 'Funcionario_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($reparacao->isNewRecord ? 'Create' : 'Update', ['class' => $reparacao->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
