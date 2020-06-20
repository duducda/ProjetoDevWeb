<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = "web";

    //Conexão com o banco de dados
    $connect = mysqli_connect($host, $user, $senha, $db);

    //Coleta dos dados do formulário
    $senhaUser = $_GET['senha'];
    $email = $_GET['email'];

    //Query para a database
    $sql = "SELECT senha FROM usuário WHERE email = '$email'";
    $result = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($result);

    if($dados['senha'] != NULL){
        if($dados['senha'] == $senhaUser)
            echo "Login realizado com sucesso";
        else{
            echo "Usuario ou senho incorretos";
        }
    }
    else{
        echo "Usuario ou senho incorretos";
    }
?>

