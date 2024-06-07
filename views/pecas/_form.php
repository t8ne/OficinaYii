<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $peca app\models\Pecas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peca-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($peca, 'Descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($peca, 'Preco')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($peca->isNewRecord ? 'Create' : 'Update', ['class' => $peca->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
