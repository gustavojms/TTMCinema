<?php

    if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        require '../conexao/conexao.php';

        $nome = addslashes($_POST['nome']);
        $usuario = addslashes($_POST['usuario']);
        $email = addslashes($_POST['email']);  
        $senha = md5(addslashes($_POST['senha']));
}
    else {
        header("Location: cadastro.php");
    }

$result = $pdo -> prepare("INSERT INTO usuario (nome, nick, email, senha) VALUES (?, ?, ?, ?)");
$result -> execute([$nome, $usuario, $email, $senha]);

header("Location: login.php");
?>