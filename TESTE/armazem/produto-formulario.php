<!--<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">-->
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include("cabecalho.php");
include("conectar.php");
include("banco-categoria.php");
include("logica-usuario.php");

verificaUsuario();

$categorias = listaCategorias($conexao);
$bateria = listaBateria($conexao);
?>


<div class="container">
    <div class="row">

        <div class="col-md-2  col-sm-2 col-xs-2 ">

        </div>

        <div class="col-md-8  col-sm-8 col-xs-8">
           <h1>CONHECIMENTO DE CARREGAMENTO</h1>
<form  class="center-block" action="adiciona-produto.php" method="post">
    <table class ="table">
        <tr>
        <td>Placa:</td>
        <td>  <input class="form-control" type="text" name="placa"> <br></td>    
        </tr>
        <tr>
        <td> Motorista:</td>
        <td><input class="form-control" type="text" name="motorista"><br></td>
        </tr>
        
        
        <td> Doca:</td>

        <td>
            <select name="doca" class="form-control">

                <option>SEM DOCA</option>   
                  

            </select>
            <br></td>
        
        
        <tr>
        <td> Categoria:</td>

        <td>
            <select name="categoria" class="form-control">

                <option>PARTICULAR</option>   
                <option>ALUGUEL</option>   

            </select>
            <br></td>
        </tr>
        <td>Tipo Caminhão:</td>
        <td>  <select name="tipo" class="form-control">

                <option>CAMINHÃO TOCO-BAU</option>   
                <option>CAMINHÃO TRUCK-BAU</option>   
                <option>CARRETA 27000 KG</option> 
            </select> <br></td>  
        </tr>
        <tr>
        <td>Observação </td>
        <td><textarea class="form-control" name="obs"></textarea>  </td>
        </tr>
        <tr>
            
        <!--<td><input type="checkbox"name="usado" value="true">Usado
            !--></tr>


        <tr>
        <td>Stato:</td>
        <td>

            <select name="categoria_id" class="form-control">

                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id'] ?>">
                        <?= $categoria['nome'] ?>
                    </option>
                <?php endforeach ?>
            </select> 


<!--<input type="radio" name="bateria_id" value="1">Esporte</br>
<input type="radio" name="bateria_id" value="2">Escolar</br>
<input type="radio" name="bateria_id" value="3">Modalidade</br>
<input type="radio" name="bateria_id" value="4">Camper</br>-->

        </td>
        </tr>
        <tr>
        <td>
        <button class = " btn btn-primary" type="submit">Salvar</button>
        </td>
        </tr>

    </table>
</form>



        </div>
    </div>
</div>


<?php include("rodape.php"); ?>