<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $pedido app\models\Pedido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($pedido, 'Estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($pedido, 'PrecoMaoObra')->textInput() ?>

    <?= $form->field($pedido, 'Descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($pedido, 'PrecoTotal')->textInput() ?>

    <?= $form->field($pedido, 'Veiculo_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($pedido->isNewRecord ? 'Create' : 'Update', ['class' => $pedido->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
