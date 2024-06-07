<?php
/* @var $this yii\web\View */

/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Oficina Yii';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Oficina Yii</h1>

        <p class="lead" style="margin-bottom: 50px">Desenvolvido por: António Rebelo Nº28837 & Diogo Pinto Nº28899</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <p><?= Html::a('Clientes', ['cliente/index'], ['class' => 'btn btn-primary btn-block']) ?></p>
            </div>
            <div class="col-lg-4">
                <p><?= Html::a('Veiculos', ['veiculo/index'], ['class' => 'btn btn-primary btn-block']) ?></p>
            </div>
            <div class="col-lg-4">
                <p><?= Html::a('Modelos', ['modelo/index'], ['class' => 'btn btn-primary btn-block']) ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <p><?= Html::a('Pedidos', ['pedido/index'], ['class' => 'btn btn-primary btn-block']) ?></p>
            </div>
            <div class="col-lg-4">
                <p><?= Html::a('Peças', ['pecas/index'], ['class' => 'btn btn-primary btn-block']) ?></p>
            </div>
            <div class="col-lg-4">
                <p><?= Html::a('Compra de Peças', ['comprapecas/index'], ['class' => 'btn btn-primary btn-block']) ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <p><?= Html::a('Fornecedores', ['fornecedor/index'], ['class' => 'btn btn-primary btn-block']) ?></p>
            </div>
            <div class="col-lg-4">
                <p><?= Html::a('Funcionários', ['funcionario/index'], ['class' => 'btn btn-primary btn-block']) ?></p>
            </div>
            <div class="col-lg-4">
                <p><?= Html::a('Reparações', ['reparacao/index'], ['class' => 'btn btn-primary btn-block']) ?></p>
            </div>
        </div>

    </div>
</div>
<style>
    .body-content {
        text-align: center;
    }

    .jumbotron {
        text-align: center;
        margin-bottom: 40px;
    }
</style>