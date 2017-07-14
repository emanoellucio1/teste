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

$id =$_POST['id'];
removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true")
?>   