<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Por favor preencher os campos seguintes para fazer login:</p>

    <div class="row justify-content-center">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-form-label'],
                    'inputOptions' => ['class' => 'form-control'],
                    'errorOptions' => ['class' => 'invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Nome de Utilizador']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Palavra-Passe']) ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"form-check\">{input} {label}</div>\n{error}",
                'labelOptions' => ['class' => 'form-check-label'],
                'inputOptions' => ['class' => 'form-check-input'],
            ]) ?>

            <div class="form-group mt-3">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <div class="mt-3" style="color:#999;">
                Pode fazer login com as credenciais<strong>admin/admin</strong> ou <strong>demo/demo</strong>.<br>
                Para modificar o username/password, verifique o código <code>app\models\User::$users</code>.
            </div>

        </div>
    </div>
</div>