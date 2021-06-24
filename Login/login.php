<?php
session_start(); 
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$query = "select id_usuario, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

    if ($row == 1) {
        $_SESSION ['usuario'] = $usuario;
        header('Location: painel.php');
        exit();
    }

    else {
        $_SESSION['not_verify'] = true;
        header('Location: index.php');
        exit();
    }

?>