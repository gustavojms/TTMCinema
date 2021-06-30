<?php 
    $usuario = $_POST['usuario'];
    $comentario = $_POST['comentario'];
    $data = $usuario . "," . "$comentario" . "\n";

    $fp = fopen('source.csv', 'a');
    fwrite($fp, $data);
    header('Location: index.php');
?>