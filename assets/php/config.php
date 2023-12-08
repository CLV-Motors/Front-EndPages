    <?php
    //variáveis para fazer a conexão
    $servername = "localhost";
    $database = "clvmotors";
    $username = "root";
    $password = "";

    //conexão com o banco de dados
    $conexao = mysqli_connect($servername,$database,$username,$password);

    //teste de conexão
    if (!$conexao) {
        die("Falha na conexão ". mysqli_connect_error());
    }

    echo("Conectado com sucesso <br><br>");
    ?>