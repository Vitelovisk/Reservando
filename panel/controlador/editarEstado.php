<?php

    include_once("../config/conexao.php");
    $id = $_POST['idR'];
    $estado = $_POST['estadoN'];
    $user = $_POST['user'];

    $sql = "UPDATE reserva SET 
                    estado_id_status='".$estado."' WHERE idr =".$id."";

    if ($resultado = $conexao->query($sql)) {
        echo "holaaaa-";
        $etd = mysqli_query($conexao, "SELECT estado_id_status FROM reserva WHERE idr = '$id'");
        $resp = mysqli_fetch_array($etd);
        $e = $resp['estado_id_status'];
        echo $e;

        if($e == "3"){

            $pontos = mysqli_query($conexao, "SELECT pontos FROM usuario WHERE id = '$user'");
            $valores = mysqli_fetch_array($pontos);
            $punto = $valores['pontos'];
            echo "pontos:".$punto;
            $puntoTotal= $punto + 20;
            echo "pontosTotal:".$puntoTotal;
            $actualizar = mysqli_query($conexao, "UPDATE usuario SET pontos = '$puntoTotal' WHERE id = '$user'");
            $pontos = mysqli_query($conexao, "SELECT pontos FROM usuario WHERE id = '$user'");
            $valor = mysqli_fetch_array($pontos);
            $p = $valor['pontos'];
            echo "pontos1:".$p;
            header("location: ../reserva.php");
        }else{
           header("location: ../reserva.php");
        }
    }
