<?php 
    $nome = $_POST['nome_filme'];
    $data_filme = $_POST['lancamento'];
    $data = $nome . "," . $data_filme . "," . "\n";

    $fp = fopen('source.csv', 'a');
    fwrite($fp, $data);
    header('Location: index.php');
?>