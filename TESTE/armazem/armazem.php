<?php
include("cabecalho.php");
include("pg_conexao.php");

//include("banco-funcao.php");

?>


<table class="table table-striped table-bordered">
    <tr>
    <td><b>Filial</b></td>
    <td><b>Data inicial</b></td>
    <td><b>doca</b></td>
    <td><b>Placa</b></td>
    <td><b>qtd pedido</b></td>
    <td><b>Codigo Produto</b></td>
    <td><b>codigo produto</b></td>
 
    
</tr>
<?php
$produtos = listaSer($conexao);
foreach ($produtos as $produto) {
    ?>

    <tr>
        
    <td><?= $produto['filial'] ?></td>

    <td><?= $produto['datainc'] ?></td> 

    <td><?= $produto['doca'] ?></td>
    <td><?= $produto['placa'] ?></td>
    <td><?= $produto['qtdpedido'] ?></td>
    <td><?= $produto['codprod'] ?></td>
    <td><?= $produto['descprod'] ?></td>
    
    
   
   <!-- <td><a class="btn btn-primary" 
           href="produto-altera-formulario.php?id=<?= $produto['id'] ?>">alterar</a>

    <td>
        <form action ="remove-produto.php" method="post">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <button class="btn btn-danger">remover</button>
        </form>!--> 

    </td>
    </tr>
    <?php
}
?>
</table>

<?php include("rodape.php"); ?>