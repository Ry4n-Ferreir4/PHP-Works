<?php

include('nav.html');
include('verifica_login.php');
include('conexao.php');

// Verificar se o formulário de mudança de senha foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_password'])) {
    // Processar a mudança de senha aqui
    $newPassword = $_POST['new_password'];

    // Exemplo de atualização de senha
    $userId = $_SESSION['usuario'];

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
    }
    
    
    $query = "UPDATE usuario SET senha = md5('$newPassword') WHERE usuario = '$userId'";
    $result = mysqli_query($conexao, $query);

    if ($conexao->query($query) === TRUE) {
        echo "Senha alterada com sucesso!";
    } else {
        echo "Erro ao atualizar a senha: " . $conexao->error;
    }
    
    $conexao->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página Protegida</title>
    <link rel="stylesheet" href="static/css/mudarsenha.css">
</head>
<body>
    <h1>Bem-vindo à página protegida!</h1>

    <h2>Mudar Senha</h2>
    <form method="POST" action="">
        <label for="new_password">Nova Senha:</label>
        <input type="password" id="new_password" name="new_password" required>
        <br>
        <input type="submit" value="Mudar Senha">
    </form>

    <h2>Sair</h2>
    <p><a href="logout.php">Clique aqui para sair</a></p>
</body>
</html>