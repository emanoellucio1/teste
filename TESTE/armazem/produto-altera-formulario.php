<?php include("cabecalho.php"); 
include("conectar.php");
include("banco-categoria.php");
include ("banco-funcao.php");

$id =$_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias = listaCategorias($conexao);
$usado =$produto['usado'] ? "checked='cheked'" : "";
 ?>

<h1> Alterando STATOS</h1>
<form action="altera-produto.php" method="post">
    
    <input type="hidden" name="id" value="<?=$produto['id']?>">
    <table class ="table">
        
        <tr>
        <td>Doca:</td>
        <td><input class="form-control" type ="text" name="doca"
                   value="<?=$produto['doca']?>"><br></td>    
        </tr>
        
        <td>Descrição </td>
        <td><textarea class="form-control" name="obs">
                 <?=$produto['obs']?></textarea>  </td>
        </tr>
        
        
        <tr>
        <td>Categoria</td>
        <td>
               
        <select name="categoria_id" class="form-control">
                
             <?php  foreach ($categorias as $categoria):
            $essaEhACategoria=$produto['categoria_id'] == $categoria['id'];
            $selecao=$essaEhACategoria ? "selected='selected'":"";
            ?>
            <option value="<?=$categoria['id']?>"<?=$selecao?>>
                    <?=$categoria['nome']?>
                </option>
              <?php endforeach ?>
            </select> 
            
            
       <!--  <input type="radio" name="categoria_id" value="1">Esporte</br>
            <input type="radio" name="categoria_id" value="2">Escolar</br>
            <input type="radio" name="categoria_id" value="3">Modalidade</br>
            <input type="radio" name="categoria_id" value="4">Camper</br>--> 
            
         </td>
           </tr>
            <tr>
        <td>
        <button class = " btn btn-primary" type="submit">Alterar</button>
        </td>
        </tr>

    </table>
</form>
<?php include("rodape.php"); ?>