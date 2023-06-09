<?php
include('nav.html');
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Painel do Usuário</title>
    <link rel="stylesheet" href="static/css/painel.css">
</head>
<body>
  <h1>Painel do Usuário</h1>

  <div class="panel">
    <h2>Seja bem-vindo, <?php  echo $_SESSION['usuario']; ?>!</h2>
    <p>Aqui está o seu painel de usuário.</p>
  </div>

  <div class="panel">
    <h2>Opções:</h2>
    <a class="btn" href="mudar_senha.php">Mudar Senha</a>
    <a class="btn" href="logout.php">Sair</a>
  </div>

</body>
</html>


