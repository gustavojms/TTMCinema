<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';

    $id = $_GET['id'];

    $result = $pdo -> prepare("DELETE FROM obra WHERE id_obra = ? AND id_usuario_obra = ?");
    $result -> execute([$id, $_SESSION['userId']]);

    header("Location: catalogo.php");
?>