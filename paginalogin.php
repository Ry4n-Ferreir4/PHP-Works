<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
<?php
    if(isset($_SESSION['nao_autenticado'])):
 ?>
    <div class="notification is-danger">
      <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php

        endif;
        unset($_SESSION['nao_autenticado']);
         ?>
                   <div class="container">
                         <h2>Login</h2>
                         <form action="login.php" method="POST">
                                 <div class="form-group">
                                     <label for="username">Username:</label>
                                     <input name="usuario" name="text" id="username" name="username" required>
                                </div>
                                <div class="form-group">
                                 <label for="password">Password:</label>
                                 <input name="senha" type="password" id="password" name="password" required>
                              </div>
                             <div class="form-group">
                                <button type="submit">Login</button>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>