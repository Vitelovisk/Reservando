<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "reservando";

$Conexao =  new mysqli($host,$user,$pass,$db);

if(!$Conexao){
  echo "Conexao fallida";
}

?>