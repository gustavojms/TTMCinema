<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';

    $id = $_GET['id_obra'];

    $result = $pdo -> prepare("DELETE FROM comentario WHERE id_user_cmt = ? AND id_obra_cmt = ?");
    $result -> execute([$_SESSION['userId'], $id]);

    header("Location: /catalogo/obras.php?id_obra=$id");
?>