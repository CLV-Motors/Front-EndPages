<?php

require "config.php";

$phplogin;
$phpsenha;
$comando = "SELECT * FROM usuario WHERE login='$phplogin' and senha='$phpsenha'";

if(strlen($_POST['email'] == 0)) {
    echo("Preencha seu email");
}
elseif (strlen($_POST['senha'] == 0)) {
    echo("Preencha sua senha");
}
else {

    $phplogin = $mysqli->real_escape_string($_POST['email']);
    $phpsenha = $mysqli->real_escape_string($_POST['senha']);

    $sqlcode = "SELECT * FROM usuario WHERE email = '$phplogin' AND senha = '$phpsenha'";
    $sqlquery = $mysqli->query($sqlcode) or die("Falha na execução do código: " $mysqli->error);

    $quantidade == $sqlquery->num_rows;

    if ($quantidade == 1) {

        $usuario = $sqlquery->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['login'] = $usuario['login'];
        $_SESSION['senha'] = $usuario['senha'];

        header("Location: index.html");

    }
    else {
        echo "Falha ao fazer o login! Usuario ou senha incorretos";
    }

}
?>