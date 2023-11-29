<?php

    include_once("../config/conexao.php");
    
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE mesa SET quantidade='".$quantidade."' WHERE idm ='1'";

    if ($resultado = $conexao->query($sql)) {
        header("location: ../stockMesa.php");
    }
