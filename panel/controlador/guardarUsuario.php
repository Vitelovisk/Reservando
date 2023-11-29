<?php

include ("../config/conexao.php");

$nomes = $_POST['nomes'];
$apelidos = $_POST['apelidos'];
$fecha = $_POST['fecha'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];
$direcao = $_POST['direcao'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$estado = $_POST['estado'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO usuario(nomes, apelidos, dni, numero, fecha, email, direcao, password, pontos, estado_usuario, cargo_idc ) VALUES ('$nomes','$apelidos', '$dni','$celular','$fecha','$email', '$direcao', '$password', '10' , '$estado','$tipo')";

$verificar = mysqli_query($Conexao, "SELECT * FROM usuario WHERE dni = '$dni'");
if(mysqli_num_rows($verificar) > 0){
    echo '<script>
            alert("Este documento de identidad ya se encuentra registrado, intento con otro");
            window.location = "../../index.php";
        </script>';
        exit();
}

$resultado = mysqli_query($Conexao, $sql);


if ($resultado == TRUE) {
    header("location:../iniciar-sessao.php");
} else {
    echo "Datos NO insertados";
}


?>
