<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';

    $titulo = addslashes($_POST['titulo']);
    $ano_lancamento = addslashes($_POST['ano_lancamento']);
    $etaria = addslashes($_POST['etaria']);
    $tipo = addslashes($_POST['tipo']);

    $result = $pdo -> prepare("INSERT INTO obra (titulo, ano_lancamento, classificacao_etaria, tipo, id_usuario) VALUES (?, ?, ?, ?, ?)");
    $result -> execute([$titulo, $ano_lancamento, $etaria, $tipo, $_SESSION['userId']]);

    header("Location: cadastrar-obra.php");
?>