<?php 
include ("../config/Conexao.php");
    guardarpontos($dni){
        
        print_r($dni);
        $sql= "INSERT INTO puntaje(pontos, dni) VALUES (10,'$dni')";
        $resultado = mysqli_query($Conexao,$sql);
        if ($resultado == TRUE) {
            echo "se guardo correctamente";
        } else {
            echo "no se registro";
        }
 }