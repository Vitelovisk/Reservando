<?php

include ("../config/conexao.php");

$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO mesa(quantidade) VALUES ('$quantidade')";

$resultado = mysqli_query($conexao, $sql);


if ($resultado == TRUE) {
    header("location:../stockMesa.php");
} else {
    echo "Datos NO insertados";
}


?>