<?php
include("conexao.php");
include("verifica_login.php");

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Verificar se o formulário de exclusão foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm_delete'])) {
    $userId = $_SESSION['usuario'];

    // Executar a exclusão
    $sql = "DELETE FROM usuario WHERE usuario = '$userId'";

    if ($conexao->query($sql) === TRUE) {
        header('Location: paginaregister.php');
    
        session_destroy();
    } else {
        echo "Erro ao excluir o usuário: " . $conexao->error;
    }

    $conexao->close();
    exit();
}

// Obter os detalhes do usuário a ser excluído (você pode adaptar essa parte do código com base na sua lógica)
$userId = $_SESSION['usuario']; // ID do usuário a ser excluído

$sql = "SELECT * FROM usuario WHERE usuario = '$userId'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Usuário não encontrado.";
    echo "$userId";
    $conexao->close();
    exit();
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Excluir Usuário</title>
    <link rel="stylesheet" href="static/css/deleteuser.css">
    <script src="static/js/deleteuser.js"></script>
</head>
<body>
    <h1>Excluir Usuário</h1>

    <p>Deseja excluir o usuário <?php echo $_SESSION['usuario']; ?>?</p>

    <form id="deleteForm" method="POST" action="">
        <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
        <input type="hidden" name="confirm_delete" value="1">
        <button type="button" onclick="confirmDelete()">Excluir</button>
    </form>
</body>
</html>