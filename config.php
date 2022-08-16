<?php 
$mysql = new mysqli("localhost","root","","curriculo");
$mysql -> set_charset("utf8");

## Verificando se o banco esta conectado corretamente ##
 if($mysql == false){
   
        echo "erro ao conectar";
    } 

?>