<?php
    include 'conexao/conexao.php';

    $usuario = addslashes($_POST['usuario']);
    $comentario = addslashes($_POST['comentario']);

    $result = $pdo -> prepare("INSERT INTO avaliacao (usuario, comentario) VALUES(?, ?)");
    $result -> execute([$usuario, $comentario]);

    header("Location: comentarios.php");
?>