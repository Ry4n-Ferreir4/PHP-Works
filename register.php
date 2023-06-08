<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="static/css/Registerstyle.css">
</head>
<body>
    <?php
    // Conexão com o banco de dados
    $conn = mysqli_connect("[SEU-IP]", "[NOME-USUARIO-DB]", "[SENHA-DB]", "[NOME-TABELA-LOGIN]");
    
    // Verifica se ocorreu um erro na conexão
    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }
    
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores enviados pelo formulário
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Insere os valores no banco de dados
        $sql = "insert into usuario(usuario, senha) values('$username',md5('$password'))";
        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
        } else {
            echo "Erro ao criar o registro: " . mysqli_error($conn);
        }
    }
    
    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
    ?>
    
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
