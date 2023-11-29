<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: iniciar-sessao.php");
	}
	
	$nomes = $_SESSION['nomes'];
    $id = $_SESSION['id'];
	$cargo_idc = $_SESSION['cargo_idc'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cheff Da Casa Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Estilos para o Modal -->
    <style>
    .modal {
        display: none; 
        position: fixed; 
        z-index: 1; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgba(0,0,0,0.4); 
    }

    .modal-cont {
        background-color: #fefefe;
        margin: 15% auto; 
        padding: 20px;
        border: 1px solid #888;
        width: 80%; 
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    </style>


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cheff da Casa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <?php if($cargo_idc == 1) { ?>

                <li class="nav-item">
                    <a class="nav-link" href="reserva.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Reserva</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="clientes.php">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Clientes</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="stockMesa.php">
                    <i class="fas fa-fw fa-cart-plus"></i>
                    <span>Stock (Mesa)</span></a>
                </li>
            <?php } else { ?>

            <li class="nav-item">
                <a class="nav-link" href="realizar-reserva.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Realizar Reserva</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="listar-reserva.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Minhas Reservass</span></a>
            </li>

            <?php } ?>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nomes ?> &nbsp;</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil-usuario.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    encerrar Sessão
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">
                <!-- Page Heading -->
                    <div id="myModal" class="modal">
                        <div class="modal-cont">
                            <span class="close">&times;</span>
                            <p id="modalText">Alguma mensagem aqui...</p>
                        </div>
                    </div>
                    <h1 class="h3 mb-2 text-gray-800">Todos Clientes</h1>

                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Usuarios - Clientes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Nomes</th>
                                            <th>Apelidos</th>
                                            <th>N° Documento</th>
                                            <th>Fecha Nacimiento</th>
                                            <th>Celular</th>
                                            <th>Correo</th>
                                            <th>Pontos</th>
                                            <th>Validar Brinde</th> <!-- Novo cabeçalho da coluna -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $cont = 1;
                                            require("config/Conexao.php");
                                            $sql = $Conexao->query("SELECT * FROM usuario WHERE cargo_idc = 2");
                                            while($resultado = $sql->fetch_assoc()) { 
                                        ?>
                                        <tr>
                                            <td><?php echo $cont; $cont++; ?></td>
                                            <td><?php echo $resultado['nomes']; ?></td>
                                            <td><?php echo $resultado['apelidos']; ?></td>
                                            <td><?php echo $resultado['dni']; ?></td>
                                            <td><?php echo $resultado['fecha']; ?></td>
                                            <td><?php echo $resultado['numero']; ?></td>
                                            <td><?php echo $resultado['email']; ?></td>
                                            <td><?php echo $resultado['pontos']; ?></td>
                                            <td>
                                                <form class='brinde-form' action='processaBrinde.php' method='post'>
                                                    <input type='hidden' name='usuario_idu' value='<?php echo $resultado['id']; ?>'>
                                                    <input type='text' name='cod_brinde'>
                                                    <input type='submit' value='Validar Brinde'>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; Copyright Cheff da casa. Todos os direitos reservados</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Sair" abaixo se estiver pronto para encerrar sua sessão atual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="encerrar-sessao.php">encerrar Sessão</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    
    <!-- Script para exibir o modal -->
    <?php if (!empty($_SESSION['modalMessage'])): ?>
        <script>
        window.onload = function() {
            document.getElementById('modalText').innerHTML = "<?php echo $_SESSION['modalMessage']; ?>";
            document.getElementById('myModal').style.display = "block";
        }

        // Fechar o modal
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            document.getElementById('myModal').style.display = "none";
        }
        </script>
    <?php
        unset($_SESSION['modalMessage']);
    endif;
    ?>
</body>
</html>