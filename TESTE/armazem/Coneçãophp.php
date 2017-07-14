<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "root";
        $banco =" testeloging";
        
        
        $conexao = mysql_connect($host,$user,$pass)or die(mysql_error());
        mysql_select_db($banco);
        ?>
    </body>
</html>
