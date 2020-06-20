<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = "web";

    //Conexão com o banco de dados
    $connect = mysqli_connect($host, $user, $senha, $db);

    //Coleta dos dados do formulário
    $nome = $_GET['nome'];
    $senhaUser = $_GET['senha'];
    $email = $_GET['email'];

    //Query para a database
    $sql = "INSERT INTO usuário (nome, senha, email) VALUES ('$nome','$senhaUser', '$email')";
    $result = mysqli_query($connect, $sql);


    echo "Cadastro realizado com sucesso"

?>

