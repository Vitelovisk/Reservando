<!DOCTYPE html>
<html>
<head>
    <title>Dashboard de Reservas</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard de Reservas</h1>
        <canvas id="barChart"></canvas>
    </div>

    <?php
    session_start();
    
    if (!isset($_SESSION['id'])) {
        header("Location: iniciar-sessao.php");
        exit(); // Encerra o script se a sessão não estiver definida
    }

    
    
    $nomes = $_SESSION['nomes'];
    $id = $_SESSION['id'];
    $cargo_idc = $_SESSION['cargo_idc'];

    // Configuração do banco de dados
    $host = "aws-reservando-db-mysql.c9joiyhrzm9x.sa-east-1.rds.amazonaws.com";
    $user = "admin";
    $pass = "yqN5ZbUGwb5K564N2koi";
    $db = "reservando";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        // Configura o PDO para lançar exceções em erros.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta ao banco de dados
        $sql = "SELECT tipo, SUM(quantidade) AS total FROM Reserva GROUP BY tipo";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Processar os resultados e preparar os dados para o gráfico
        $labels = [];
        $quantidades = [];

        foreach ($result as $row) {
            $labels[] = $row['tipo'];
            $quantidades[] = $row['total'];
        }
    } catch (PDOException $e) {
        die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }
    ?>

    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= json_encode($labels) ?>,
                datasets: [{
                    label: 'Quantidade',
                    data: <?= json_encode($quantidades) ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
