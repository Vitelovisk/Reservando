<?php 
include ("../config/conexao.php");
    guardarpontos($dni){
        
        print_r($dni);
        $sql= "INSERT INTO puntaje(pontos, dni) VALUES (10,'$dni')";
        $resultado = mysqli_query($conexao,$sql);
        if ($resultado == TRUE) {
            echo "se guardo correctamente";
        } else {
            echo "no se registro";
        }
 }