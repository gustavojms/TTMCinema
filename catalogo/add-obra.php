<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';

    $titulo = addslashes($_POST['titulo']);
    $data_lancamento = addslashes($_POST['data_lancamento']);
    $etaria = addslashes($_POST['etaria']);
    $tipo = addslashes($_POST['tipo']);

    $result = $pdo -> prepare("INSERT INTO obra (titulo, data_lancamento, classificacao_etaria, tipo, cod_user) VALUES (?, ?, ?, ?, ?)");
    $result -> execute([$titulo, $data_lancamento, $etaria, $tipo, $_SESSION['userId']]);

    header("Location: cadastrar-obra.php");
?>