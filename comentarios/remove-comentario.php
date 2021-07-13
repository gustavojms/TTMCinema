<?php 
    include '../conexao/conexao.php';

    $id = $_GET['id'];

    $result = $pdo -> prepare("DELETE FROM avaliacao WHERE cod_avaliacao = ?");
    $result -> execute([$id]);

    header("Location: comments.php");
?>