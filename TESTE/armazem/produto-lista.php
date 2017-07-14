<!DOCTYPE html PUBLIC "-//W 3C//DTD HTML 3.2 Final//EN">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include("cabecalho.php");
include("conectar.php");

include("banco-funcao.php");
if (array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
    ?>
    <p class="alert-success">Produto removido com sucesso!</p>
    <?php
}
?>


<table class="table table-striped table-bordered">
    <tr>
    <td><b>PLACA</b></td>
    <td><b>MOTORISTA</b></td>
    <td><b>DOCA</b></td>
    <td><b>CATEGORIA</b></td>
    <td><b>TIPO</b></td>
    <td><b>OBS:</b></td>
    <td><b>STATO</b></td>
    <td><b>Opção</b></td>
    
</tr>
<?php
$produtos = listaProdutos($conexao);
foreach ($produtos as $produto) {
    ?>

    <tr>
        
    <td><?= $produto['placa'] ?></td>

    <td><?= $produto['motorista'] ?></td> 
    <td><?= $produto['doca'] ?></td> 
    <td><?= $produto['categoria'] ?></td>
    <td><?= $produto['tipo'] ?></td>
    <td><?= substr($produto['obs'], 0, 50) ?></td>
    <td><?= $produto['categoria_nome'] ?></td>
    <td><a class="btn btn-primary" 
           href="produto-altera-formulario.php?id=<?= $produto['id'] ?>">alterar</a>
    <td>
        <form action ="remove-produto.php" method="post">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <button class="btn btn-danger">remover</button>
        </form>

    </td>
    </tr>
    <?php
}
?>
</table>
  
<?php include("rodape.php"); ?>