<?php 
    $nome = $_POST['nome'];
    $comentario = $_POST['comentario'];
    $rate = $_POST['rate'];
    $data = $comentario . "," . "$rate" . "\n";

    $fp = fopen('source.csv', 'a');
    fwrite($fp, $data);
    header('Location: index.php');
?>