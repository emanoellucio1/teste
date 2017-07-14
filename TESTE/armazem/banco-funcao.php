
<?php

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query(  $conexao,"select p.*,c.nome as categoria_nome from conhecimento"
            . " as p join categorias as c on c.id=p.categoria_id WHERE categoria_id=1  ");
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    
   // ($conexao,"select p.*,c.nome as categoria_nome from conhecimento as p join categorias as c on c.id=p.categoria_id");
   
    return $produtos;
}
function listaStato($conexao) {
    $produtos = array();
    $resultado = mysqli_query(  $conexao,"select p.*,c.nome as categoria_nome from conhecimento"
            . " as p join categorias as c on c.id=p.categoria_id WHERE categoria_id>=2  ");
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    
   // ($conexao,"select p.*,c.nome as categoria_nome from conhecimento as p join categorias as c on c.id=p.categoria_id");
   
    return $produtos;
}

/// NOVA LISTA DE PRODUTOS


function listaSer($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao,"select *from cdo_audit005");
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function listaContatos($conexao) {
$arrayContatos = array();
$query = "select *from cdo_audit005";

$resultado = mysqli_query($conexao, $query);

while ($produto = mysqli_fetch_assoc($resultado)) {
array_push($arrayContatos, $produto);
}

return $arrayContatos;
}







function insereProduto($conexao,$placa,$motorista,$doca,$categoria,$tipo,$obs,$categoria_id,$usado) {
    $query = "insert into conhecimento (placa,motorista,doca,categoria,tipo,obs,categoria_id,usado) values('{$placa}','{$motorista}','{$doca}','{$categoria}'"
    . ",'{$tipo}','{$obs}','{$categoria_id}',{$usado})";
  
    echo $query;
    return mysqli_query($conexao, $query);
        
  
    
    }

function alteraProduto($conexao,$id,$doca,$obs,$categoria_id){
 $query="update conhecimento set doca='{$doca}',obs='{$obs}',categoria_id={$categoria_id} where id = {$id}";
echo $query; 
 return mysqli_query($conexao, $query);
 
}
function buscaProduto($conexao,$id){
    $query="select * from conhecimento where id={$id}";
    $resultado=mysqli_query($conexao,$query);
    return mysqli_fetch_assoc($resultado);
}


function removeProduto($conexao, $id) {
    $query = "delete from produtos where id ={$id}";
    return mysqli_query($conexao, $query);
}

?>
    