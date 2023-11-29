<?php
    include ("../config/conexao.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM reserva WHERE idr ='$id'";

    $query = mysqli_query($Conexao,$sql);
    if ($query === TRUE) {
        header("Location: ../listar-reserva.php");
    }

?>