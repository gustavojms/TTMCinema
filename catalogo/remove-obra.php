<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';

    $id = $_GET['id'];

    $result = $pdo -> prepare("DELETE FROM obra WHERE codigo = ? AND cod_user = ?");
    $result -> execute([$id, $_SESSION['userId']]);

    header("Location: catalogo.php");
?>