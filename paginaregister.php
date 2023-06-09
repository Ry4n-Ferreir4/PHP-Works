<?php
    session_start();
    include('nav.html');
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
    <link rel="stylesheet" type="text/css" href="static/css/Registerstyle.css">
</head>

<body>
<div class="container">
                        <h2>Register</h2>
                        <form action="register.php" method="POST">
                                 <div class="form-group">
                                     <label for="username">Username:</label>
                                     <input name="usuario" name="text" id="username" name="username" required>
                                </div>
                                <div class="form-group">
                                 <label for="password">Password:</label>
                                 <input name="senha" type="password" id="password" name="password" required>
                              </div>
                             <div class="form-group">
                                <button type="submit">Register</button>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>