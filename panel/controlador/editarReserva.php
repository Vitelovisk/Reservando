<?php

    include_once("../config/conexao.php");
    $id = $_POST['id'];
    $quantidade = $_POST['quantidade'];
    $fecha = $_POST['fecha'];
    $tipo = $_POST['tipo'];
    $hora = $_POST['hora'];
    $comentario = $_POST['comentario'];

    $sql = "UPDATE reserva SET 
                    quantidade='".$quantidade."',
                    fechar='".$fecha."',
                    tipo='".$tipo."',
                    hora='".$hora."',
                    comentario='".$comentario."' WHERE idr =".$id."";

    if ($resultado = $conexao->query($sql)) {
        header("location: ../listar-reserva.php");
    }
