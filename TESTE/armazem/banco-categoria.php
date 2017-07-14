<?php


 function listaCategorias($conexao){
     $categorias =array();
     $query="select * from categorias";
     $resultado =  mysqli_query($conexao, $query);
     while($categoria =  mysqli_fetch_assoc($resultado)){
         array_push($categorias,$categoria);
     }
     return $categorias;
 }
 
 function listaBateria($conexao){
     $bateria =array();
     $query="select * from bateria";
     $resultado =  mysqli_query($conexao, $query);
     while($baterias =  mysqli_fetch_assoc($resultado)){
         array_push($bateria,$baterias);
     }
     return $bateria;
 }