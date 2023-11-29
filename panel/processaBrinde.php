<?php
// processaBrinde.php
date_default_timezone_set('America/Sao_Paulo');
session_start();

// Suas informações de conexão com o banco de dados
$host = "aws-reservando-db-mysql.c9joiyhrzm9x.sa-east-1.rds.amazonaws.com";
$user = "admin";
$pass = "yqN5ZbUGwb5K564N2koi";
$db = "reservando";

// Estabelecendo a conexão com o banco de dados
$Conexao = new mysqli($host, $user, $pass, $db);

// Verificar se a conexão foi estabelecida
if ($Conexao->connect_error) {
    die("Conexão falhada: " . $Conexao->connect_error);
}

// Pegando os valores enviados pelo formulário
$usuario_idu = $_POST['usuario_idu'];
$cod_brinde = $_POST['cod_brinde'];

// Preparando a consulta para verificar se o brinde pertence ao usuário
$stmt = $Conexao->prepare("SELECT * FROM brindes WHERE cod_brinde = ? AND usuario_idu = ?");
$stmt->bind_param("si", $cod_brinde, $usuario_idu);
$stmt->execute();
$result = $stmt->get_result();

// Verificando se um brinde foi encontrado
if ($result->num_rows > 0) {
    // Capturando a data e hora atuais
    $dataHoraAtual = date("Y-m-d H:i:s");

    // Atualizando o status do brinde e a dataHoraColeta
    $updateStmt = $Conexao->prepare("UPDATE brindes SET status_brinde = '2', dataHoraColeta = ? WHERE cod_brinde = ? AND usuario_idu = ?");
    $updateStmt->bind_param("ssi", $dataHoraAtual, $cod_brinde, $usuario_idu);
    $updateStmt->execute();

    // Definindo a mensagem de sucesso na sessão
    $_SESSION['modalMessage'] = "Brinde validado com sucesso!";
} else {
    // Definindo a mensagem de erro na sessão
    $_SESSION['modalMessage'] = "Código de brinde inválido ou não pertence ao usuário.";
}

// Fechando as declarações
$stmt->close();
if (isset($updateStmt)) {
    $updateStmt->close();
}
$Conexao->close();

// Redireciona de volta para a página dos clientes
header('Location: clientes.php');
?>