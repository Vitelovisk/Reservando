<?php

include("../config/Conexao.php");

$quantidade = $_POST['quantidade'];
$fecha = $_POST['fecha'];
$tipo = $_POST['tipo'];
$hora = $_POST['hora'];
$comentario = $_POST['comentario'];
$estado = "1";
$usuario = $_POST['usuario'];

$sql = "INSERT INTO reserva (quantidade, fechar, tipo, hora, comentario, estado_id_status, usuario_idu, dataHoraCadastro) VALUES ('$quantidade', '$fecha', '$tipo', '$hora', '$comentario', '$estado', '$usuario', NOW())";
$resultado = mysqli_query($Conexao, $sql);

if ($resultado === TRUE) {
    header("location:../listar-reserva.php");
} else {
    echo "Dados não inseridos";
}

?>
