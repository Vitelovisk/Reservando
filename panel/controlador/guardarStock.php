<?php

include ("../config/Conexao.php");

$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO mesa(quantidade) VALUES ('$quantidade')";

$resultado = mysqli_query($Conexao, $sql);


if ($resultado == TRUE) {
    header("location:../stockMesa.php");
} else {
    echo "Datos NO insertados";
}


?>