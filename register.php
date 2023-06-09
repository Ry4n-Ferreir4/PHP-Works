    <?php
    include('conexao.php');
    // Verifica se ocorreu um erro na conexão
    if (!$conexao) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }
    
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores enviados pelo formulário
        $username = mysqli_real_escape_string($conexao, $_POST['usuario']);
        $password = mysqli_real_escape_string($conexao, $_POST['senha']);
        
        // Insere os valores no banco de dados
        $sql = "insert into usuario(usuario, senha) values('$username',md5('$password'))";
        if (mysqli_query($conexao , $sql)) {
            $_SESSION['usuario'] = $username;
            header("Location: painel.php");
        } else {
            echo "Erro ao criar o registro: " . mysqli_error($conexao);
        }
    }
    
    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);

  
