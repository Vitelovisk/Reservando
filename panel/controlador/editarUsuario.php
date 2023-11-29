<?php

    include_once("../config/conexao.php");
    $id = $_POST['id'];
    $nomes = $_POST['nomes'];
    $apelidos = $_POST['apelidos'];
    $fecha = $_POST['fecha'];
    $celular = $_POST['celular'];
    $direcao = $_POST['direcao'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "UPDATE usuario SET
                    nomes='".$nomes."', 
                    apelidos='".$apelidos."', 
                    numero='".$celular."', 
                    fecha='".$fecha."', 
                    email='".$email."', 
                    direcao='".$direcao."', 
                    password='".$password."' WHERE id =".$id."";

    if ($resultado = $Conexao->query($sql)) {
        header("location: ../perfil-usuario.php");
    }
