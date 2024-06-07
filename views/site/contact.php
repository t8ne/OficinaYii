<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Obrigado por nos contactar. Responderemos assim que possível.
        </div>

        <p>
            Note que se você ativar o depurador Yii, deverá ser capaz de visualizar a mensagem de email no painel de emails
            do depurador.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Como a aplicação está em modo de desenvolvimento, o email não é enviado, mas salvo como
                um arquivo em <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Por favor, configure a propriedade <code>useFileTransport</code> do componente de aplicação <code>mail</code>
                para false para habilitar o envio de emails.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            Se você tiver dúvidas comerciais ou outras perguntas, preencha o seguinte formulário para nos contactar.
            Obrigado.
        </p>

        <div class="row justify-content-center">
            <div class="col-lg-6">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Nome']) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email']) ?>

                <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Assunto']) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Mensagem']) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-8">{input}</div></div>',
                ]) ?>

                <div class="form-group mt-3">
                    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary btn-block', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>