<?php
?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="static/css/maincss.css">
</head>
<body>
    <div class="container">
        <h1>Bem vindo ao Meu site</h1>
        <div class="button-group">
            <a href="https://github.com/Ry4n-Ferreir4" target="_blank">Github</a>
            <a href="indexsistemalogin.php">Sistema de Register/Login</a>
        </div>
    </div>



 <div class="gallery">
        <?php
        // Pasta onde as imagens estão localizadas
        $imageFolder = './imgphp/';

        // Obter lista de arquivos da pasta
        $files = glob($imageFolder . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        // Loop através dos arquivos e exibir as imagens
        foreach ($files as $file) {
            echo '<img src="' . $file . '" alt="Imagem">';
        }
        ?>
    </div>
</body>
</html>
