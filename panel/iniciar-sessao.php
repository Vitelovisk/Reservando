<?php
	
	require "config/db.php";
	
	session_start();
	
	if($_POST){
		
		$usuario = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT id, password, nomes, apelidos, cargo_idc FROM usuario WHERE email='$usuario'";
		echo $sql;
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['password'];
			
			$pass_c = sha1($password);
			
			if($password_bd == $pass_c){
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['nomes'] = $row['nomes'];
                $_SESSION['apelidos'] = $row['apelidos'];
				$_SESSION['cargo_idc'] = $row['cargo_idc'];
				$cargo = $row['cargo_idc'];
                if($cargo == "1"){
                    header("Location: reserva.php");
                }else{
                    header("Location: realizar-reserva.php");
                }
				
			} else {
			
			echo "Senha errada";
			
			}
			
			
			} else {
			echo "Usuário não existe";
		}
		
		
		
	}
	
	
	
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iniciar Sessão</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style ="background-color:#ffb03b">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6"> <img src="img/mesas.jpg" width="500" ></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="img/logo.png" width="300">
                                        <h1 class="h4 text-gray-900 mb-4">Olá novamente</h1>
                                    </div>
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Informe seu e-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                id="exampleInputPassword" placeholder="senha">
                                        </div>
                                        <button type="submit" class="btn btn-warning btn-user btn-block">Iniciar Sessão</button></div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="registrar.php">Crie a sua conta aqui!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>