<?php 
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $data = $nome . "," . $usuario . "," . $senha . "\n";

    $fp = fopen('source.csv', 'a');
    fwrite($fp, $data);
    header('Location: index.php');
?>