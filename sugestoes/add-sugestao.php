<?php 
    include '../conexao/conexao.php';

    $nome = addslashes($_POST['nome_filme']);
    $lancamento = addslashes($_POST['lancamento']);

    $result = $pdo -> prepare("INSERT INTO sugestao (nome_sugestao, data_sugestao) VALUES (?,?)");
    $result -> execute([$nome, $lancamento]);

    header("Location: sugestoes.php");
?>