<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: iniciar-sessao.php");
}

$nomes = $_SESSION['nomes'];
$id = $_SESSION['id'];
$cargo_idc = $_SESSION['cargo_idc'];
$brindeDisponivel = false; // Inicializando a variável

try {
    $host = "aws-reservando-db-mysql.c9joiyhrzm9x.sa-east-1.rds.amazonaws.com";
    $user = "admin";
    $pass = "yqN5ZbUGwb5K564N2koi";
    $db = "reservando";

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Consultar a tabela Brindes para verificar se o usuário já possui um brinde com status 1
    $stmt = $pdo->prepare("SELECT * FROM Brindes WHERE usuario_idu = :id AND status_brinde = 1");
    $stmt->execute(['id' => $id]);
    $brindeExistente = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($brindeExistente) {
        // O usuário já possui um brinde com status 1, não gere um novo código
        $brindeDisponivel = false;
    } else {
        // Verificar se a condição específica é atendida
        $stmt = $pdo->prepare("SELECT COUNT(*) AS num_reservas FROM Reserva WHERE usuario_idu = :id AND estado_id_status = 3 AND DataHoraCadastro > (SELECT MAX(DataHoraColeta) FROM Brindes WHERE usuario_idu = :id)");
        $stmt->execute(['id' => $id]);

        // Obter o resultado
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $numeroDeReservas = $resultado['num_reservas'];

        if ($numeroDeReservas >= 3) {
            // Gerar um código aleatório de 8 dígitos para cod_brinde
            $codBrinde = mt_rand(10000000, 99999999);

            // Obter a data e hora atuais
            $dataHoraCadastro = date('Y-m-d H:i:s');

            // Atualizar o status do brinde para 1 (liberado), inserir o novo brinde na tabela brindes e definir a data e hora do cadastro
            $stmt = $pdo->prepare("INSERT INTO Brindes (cod_brinde, status_brinde, usuario_idu, dataHoraCadastro) VALUES (:codBrinde, 1, :idUsuario, NOW())");
            $stmt->execute(['codBrinde' => $codBrinde, 'idUsuario' => $id]);
            $brindeDisponivel = true;
        } else {
            $brindeDisponivel = false;
        }
    }
} catch (PDOException $e) {
    // Tratar erro de conexão ou consulta
    echo "Erro na conexão: " . $e->getMessage();
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

                <li class="nav-item">
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

            <li class="nav-item active">
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
                                    Ação da sessão
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">
                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Minhas Reservass</h1>

                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">              
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>N° Pessoas</th>
                                            <th>Fecha</th>
                                            <th>Tipo</th>
                                            <th>Hora</th>
                                            <th>Comentario</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $cont = 1;
                                        require("config/conexao.php");
                                        $sql = $Conexao->query("SELECT * FROM reserva WHERE usuario_idu = '$id'");
                                        while($resultado = $sql->fetch_assoc()) { ?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $cont; $cont++; ?></td>
                                            <td><?php echo $resultado['quantidade']; ?></td>
                                            <td><?php echo $resultado['fechar']; ?></td>
                                            <td><?php echo $resultado['tipo']; ?></td>
                                            <td><?php echo $resultado['hora']; ?></td>
                                            <td><?php echo $resultado['comentario']; ?></td>
                                            <td>
                                                <a href="editarReserva.php?id=<?php echo $resultado['idr']?>" class="btn btn-primary"><i class="fas fa-marker"></i></a>
                                                <a href="controlador/cancelarReserva.php?id=<?php echo $resultado['idr']?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Local para mostrar a disponibilidade do brinde -->
                    <div class="card shadow mb-4">
                        <div class="card-body" id="status-brinde">
                            <?php
                                if ($brindeDisponivel) {
                                    echo "<p>Parabéns! Você tem um brinde de champanhe disponível!</p>";
                                } elseif ($brindeExistente && $brindeExistente['status_brinde'] == 1) {
                                    echo "<p>Parabéns! Você tem um brinde de champanhe disponível!</p>";
                                } else {
                                    echo "<p>Você ainda não tem um brinde disponível.<br> Faça mais reservas ou aguarde o gerente finalizar sua reserva!</p>";
                                }
                            ?>
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

</body>

</html>