<?php
include("cabecalho.php");
include("conectar.php");
include("banco-funcao.php");

$id=$_POST['id'];
$doca=$_POST['doca'];
$placa=$_POST['placa'];
$obs =$_POST['obs'];
$categoria_nome['categoria_nome'];
//header("Location:produto-formulario.php");
$categoria_id=$_POST['categoria_id'];
$usado=$_POST['usado'];
if(array_key_exists('usado', $_POST)){
    $usuado="true";
   }else{
        $usado="false";
    }

//$usado=$_POST['usado'];
//$conexao = mysqli_connect('localhost', 'root', 'root', 'loja');


if (alteraProduto($conexao,$id,$doca,$obs,$categoria_id)) {
    ?>
    <b><h1> <p class ="text-success">A placa  <?= $placa ?> foi  alterada o stato para <?= $categoria_nome ?> </p></h1>
    <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>

        <h1> <p class ="text-danger">0 produto <?= $placa ?>, não foi alterado  : <?= $msg ?></p></h1></b>
    <?php
}
?>
<?php include("rodape.php"); ?>
