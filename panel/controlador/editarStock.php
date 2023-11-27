<?php

    include_once("../config/Conexao.php");
    
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE mesa SET quantidade='".$quantidade."' WHERE idm ='1'";

    if ($resultado = $Conexao->query($sql)) {
        header("location: ../stockMesa.php");
    }
