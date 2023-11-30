<?php
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: iniciar-sessao.php");
	}
	
	$id = $_SESSION['id'];
    $nomes = $_SESSION['nomes'];
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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="clientes.php">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Clientes</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="stockMesa.php">
                    <i class="fas fa-fw cart-plus"></i>
                    <span>Stock (Mesa)</span></a>
                </li>

            <?php }  else { ?>

            <li class="nav-item active">
                <a class="nav-link" href="realizar-reserva.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Realizar Reserva</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="listar-reserva.php">
                    <i class="fas fa-fw fa-cart-plus"></i>
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
                                    Ação da sessão
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <center>
                    <div class="container-fluid">
                        <div class="col-lg-8">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Editar Reserva</h1>
                                </div>
                                <form action="controlador/editarReserva.php" method="POST">
                                        <?php
                                            include ('config/conexao.php');

                                            $sql = "SELECT * FROM reserva WHERE idr =".$_GET['id'];
                                            $resultado = $conexao->query($sql);
                                            $row = $resultado->fetch_assoc();
                                        ?>
                                    <input type="Hidden" class="form-control" name="id" value="<?php echo $row['idr']; ?>" style="display:none">
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" value="<?php echo $row['quantidade'] ?>" id="quantidade" name="quantidade" placeholder="N° Pessoas">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="mesa" name="mesa" placeholder="N° Mesas ocupadas" disabled>
                                        </div>
                                        <div class="col-sm-4"> 
                                            <input type="date" value="<?php echo $row['fechar']; ?>" class="form-control" name="fecha" placeholder="Fecha">
                                        </div>
                                    </div>
                                    <br>    
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <select name="tipo" id="tipo" class="form-control">
                                                <option selected><?php echo $row['tipo']; ?></option>
                                                <option value="Almoco">Almoco</option>
                                                <option value="Jantar">Jantar</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="hora" id="hora" class="form-control">
                                                <option selected><?php echo $row['hora']; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <textarea name="comentario"  class="form-control" placeholder="Comentario / Recomendação" rows="3"><?php echo $row['comentario']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input name="usuario" value="<?php echo $id?>" class="form-control" placeholder="Usuario"  style="display:none">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" name="guardar" class="btn btn-warning btn-user btn-block">Guardar</button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </center>

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

    <script>
    $(document).ready(function() {
        $("#quantidade").change(function() {
        var quantidade = $("#quantidade").val();
        var total = (quantidade / 2)-1;
        var totalm = total.toFixed(0);
        $('#mesa').val(totalm);
        console.log(totalm);
     });
    });
    </script>

    <script language="javascript">
        $(document).ready(function(){
                $("#tipo").on('change', function () {
                    $("#tipo option:selected").each(function () {
                        tipoSeleccionado=$(this).val();
                        $.post("controlador/hora.php", { tipoSeleccionado: tipoSeleccionado }, function(data){
                            $("#hora").html(data);
                        });         
                    });
            });
        });
    </script>


</body>

</html>