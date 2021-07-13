<?php 
    include '../conexao/conexao.php';

    $id = $_GET['id'];

    $result = $pdo -> prepare("DELETE FROM sugestao WHERE id_sugestao = ?");
    $result -> execute([$id]);

    header("Location: sugestao.php");
?>