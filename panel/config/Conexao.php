<?php
  $host = "aws-reservando-db-mysql.c9joiyhrzm9x.sa-east-1.rds.amazonaws.com";
  $user = "admin";
  $pass = "yqN5ZbUGwb5K564N2koi";
  $db = "reservando";

$conexao =  new mysqli($host,$user,$pass,$db);

if(!$conexao){
  echo "Conexao falhou";
}

?>
