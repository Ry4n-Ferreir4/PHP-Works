<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Painel do Usuário</title>
  <style>
    /* Estilos CSS para a página */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1 {
      color: #333;
    }

    .panel {
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #337ab7;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <h1>Painel do Usuário</h1>

  <div class="panel">
    <h2>Seja bem-vindo, <?php  echo $_SESSION['usuario']; ?>!</h2>
    <p>Aqui está o seu painel de usuário.</p>
  </div>

  <div class="panel">
    <h2>Opções:</h2>
    <a class="btn" href="index.php">Home</a>
    <a class="btn" href="mudar_senha.php">Mudar Senha</a>
    <a class="btn" href="logout.php">Sair</a>
  </div>

  <p>Outro conteúdo do painel do usuário...</p>

</body>
</html>
