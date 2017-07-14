

    
    

  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
  <head>
    
    

    <script type="text/javascript">
      <!--
      i = 0;
      tempo = 50;
      tamanho = 826; // tamanho da barra de rolagem  >> Ver arquivo Leiame.txt

      function Rolar() {
        document.getElementById('painel').scrollTop = i;
        i++;
        t = setTimeout("Rolar()", tempo);
        if (i == tamanho) {
          i = 0;
        }
      }
      function Parar() {
        clearTimeout(t);
      }
      //-->
    </script>
  </head>

  <body onload="Rolar()">
    <div class="container" id="painel" style=" cursor: default; height: 100%; width: 100%; overflow: hidden; " onmouseover="Parar()" onmouseout="Rolar()">
      <!-- INÍCIO DO CONTEÚDO DA DIV -->
    
        <?php
include("cabecalho.php");
include("conectar.php");

include("banco-funcao.php");

echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=painel.php'>";

//echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=nome_do_arquivo.php'>";

if (array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
    ?>
    <p class="alert-success">Produto removido com sucesso!</p>
    <?php
}
?>




</tr>


<tr>

<tr>
    <?php
    $produtos = listaProdutos($conexao);
    ?>

<div class="container" role="main">
    <div class="page-header">
        <h1> MONITORAMENTO</h1>
    </div>
    <div>
        <div class="row">
             
            <div class="col-xs-6 col-sm-6 col-md-6 borda-rigth">
                <h2> PARADOS</h2><br>
                <div class="row">

                    <?php foreach ($produtos as $produto) { ?>
                        <div class=" col-sm-6 col-md-4 ">
                            <div class="thumbnail">

                                <div class="caption text-center">
                                    <h2><?= $produto['doca']       ?></h2>
                                    <h4><?= $produto['placa'] ?></td></h4>
                                    <h6><?= $produto['categoria_nome'] ?></td></h6>
                                </div>      

                            </div>
                        </div>

                    <?php } ?>

                </div>

            </div>
            
            <div class=" col-xs-6 col-sm-6 col-md-6 borda-left">
                <h2>  CARREGAMENTO</h2><br>
                <div class="row">
                    <?php
                    $statos = listaStato($conexao);
                    foreach ($statos as $stato) {
                        ?>
                        <div class=" col-sm-6 col-md-4 ">
                            <div class="thumbnail">

                                <div class="caption text-center borda ">
                                    <font class="cor">
                                        <h6><?php echo 'DOCA'; ?></td></h6>
                                        <h1><?= $stato['doca']       ?></h1>
                                        <h4>  <?= $stato['placa'] ?></td></h4>
                                        <h6><?= $stato['categoria_nome'] ?></td></h6></font>
                                </div>      

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>



    <?php include("rodape.php"); #DFEDFE
    ?>
    
       
      
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      <!-- FIM DO CONTEÚDO DA DIV -->
    </div>
  </body>
</html>

