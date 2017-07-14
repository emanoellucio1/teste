<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include("cabecalho.php");
include("conectar.php");
include("banco-funcao.php");
include("logica-usuario.php");

verificaUsuario();

$placa = $_POST['placa'];
$motorista = $_POST['motorista'];
$doca=$_POST['doca'];
$categoria = $_POST['categoria'];
$tipo = $_POST['tipo'];
$obs = $_POST['obs'];
$categoria_id = $_POST['categoria_id'];
$usado = $_POST['usado'];
if (array_key_exists('usado', $_POST)) {
    $usuado = "true";
} else {
    $usado = "false";
}

//($nome, $preco, $secao, $quantidade,$modelo,$quant,$descricao, $categoria_id, $usado)

//$conexao = mysqli_connect('localhost', 'root', 'root', 'loja');


if (insereProduto($conexao,$placa,$motorista,$doca,$categoria,$tipo,$obs,$categoria_id,$usado)) {
    ?>
    <b><h1> <p class ="text-success">A <?= $placa ?> foi agendada o conhecimento.</p></h1>
    <?php
} else {
    $msg = mysqli_error($conexao);
    ?>

        <h1> <p class ="text-danger">0 produto <?= $placa ?>, não foi adicionado : <?= $msg ?></p></h1></b>
    <?php echo $query; ?>

        <?php
    }
    ?>
<?php include("rodape.php"); ?>
