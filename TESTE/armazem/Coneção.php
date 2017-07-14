<?php

echo "emanoel lucio";
 class banco{
    
     private $host = "localhost";
        private $user = "root";
         private $pass = "root";
       private $banco =" testeloging";
    
       function conectar(){
           return mysql_connect($this->host,$this->user,$this->pass);
       }
       
       
}