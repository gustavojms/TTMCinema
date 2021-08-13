<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';

    $id = $_GET['id_obra'];
    $idcmt = $_GET['id_comentario'];

    $result = $pdo -> prepare("DELETE FROM comentario WHERE id_user_cmt = ? AND id_comentario = ?");
    $result -> execute([$_SESSION['userId'], $idcmt]);

    header("Location: /catalogo/obras.php?id_obra=$id");
?>