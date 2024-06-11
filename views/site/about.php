<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Sobre';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>Sobre</h1>

    <h2>Projeto de Engenharia de Software</h2>
    <p>Este projeto foi desenvolvido como parte da disciplina de Engenharia de Software do curso de Engenharia da Computação Gráfica e Multimédia na
        Escola Superior de Tecnologia e Gestão, do Instituto Politécnico de Viana do Castelo. 
        O objetivo principal deste trabalho foi criar uma aplicação web utilizando o framework Yii, implementando as melhores práticas de desenvolvimento de software, design de banco de dados, e
        arquitetura de sistemas.</p>

    <h3>Objetivos do Projeto</h3>
    <p>O projeto foi concebido com os seguintes objetivos em mente:</p>
    <ul>
        <li><strong>Aprender e Aplicar o Framework Yii</strong>: Utilizar o framework Yii para construir uma aplicação
            web robusta, escalável e segura.</li>
        <li><strong>Design de Banco de Dados</strong>: Modelar um banco de dados relacional que atenda aos requisitos do
            sistema, incluindo a definição de relações entre tabelas.</li>
        <li><strong>Desenvolvimento de CRUD Completo</strong>: Implementar operações de Create, Read, Update e Delete
            (CRUD) para as principais entidades do sistema.</li>
        <li><strong>Práticas de Engenharia de Software</strong>: Aplicar princípios e práticas de engenharia de
            software, como modularidade, reutilização de código, e padrões de design.</li>
    </ul>

    <h3>Funcionalidades Implementadas</h3>
    <p>A aplicação desenvolvida é um sistema de gestão de oficina que inclui as seguintes funcionalidades:</p>
    <ul>
        <li><strong>Gestão de Clientes</strong>: Cadastro, visualização, edição e remoção de informações dos clientes.
        </li>
        <li><strong>Gestão de Veículos</strong>: Registro de veículos associados a clientes, incluindo dados como
            matrícula, cor, e modelo.</li>
        <li><strong>Gestão de Modelos de Veículos</strong>: Cadastro e gerenciamento de diferentes modelos de veículos.
        </li>
        <li><strong>Gestão de Pedidos</strong>: Registro de pedidos de reparação realizados pelos clientes.</li>
        <li><strong>Gestão de Peças e Compras de Peças</strong>: Controle de peças utilizadas nos reparos e compras de
            peças de fornecedores.</li>
        <li><strong>Gestão de Fornecedores</strong>: Cadastro e gerenciamento de fornecedores de peças.</li>
        <li><strong>Gestão de Funcionários</strong>: Registro e gerenciamento de funcionários da oficina, incluindo seus
            cargos e salários.</li>
        <li><strong>Gestão de Reparações</strong>: Registro detalhado de reparações realizadas, associando pedidos e
            funcionários responsáveis.</li>
    </ul>

    <h3>Tecnologias Utilizadas</h3>
    <ul>
        <li><strong>Framework Yii</strong>: Utilizado para o desenvolvimento rápido de aplicações web em PHP.</li>
        <li><strong>Bootstrap</strong>: Framework de front-end para a criação de interfaces responsivas e elegantes.
        </li>
        <li><strong>MySQL</strong>: Sistema de gerenciamento de banco de dados relacional utilizado para armazenar os
            dados da aplicação.</li>
        <li><strong>Gii</strong>: Ferramenta do Yii para geração automática de código, facilitando a criação de modelos,
            controladores e views.</li>
    </ul>

    <h3>Conclusão</h3>
    <p>Este projeto proporcionou uma experiência prática valiosa no uso do framework Yii e na aplicação de conceitos de
        engenharia de software. O desenvolvimento do sistema de gestão de oficina envolveu a modelagem de um banco de
        dados relacional, a implementação de funcionalidades completas de CRUD e a utilização de práticas modernas de
        desenvolvimento de software.</p>
    <p>A aplicação desenvolvida é um exemplo concreto de como uma arquitetura bem planejada e o uso de ferramentas
        adequadas podem resultar em um sistema funcional e eficiente, atendendo aos requisitos definidos e
        proporcionando uma base sólida para futuras extensões e melhorias.</p>
</div>