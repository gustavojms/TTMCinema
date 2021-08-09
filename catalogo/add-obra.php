<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';

    $titulo = addslashes($_POST['titulo']);
    $ano_lancamento = addslashes($_POST['ano_lancamento']);
    $etaria = addslashes($_POST['etaria']);
    $tipo = addslashes($_POST['tipo']);
    $nacionalidade = addslashes($_POST['nacionalidade']);
    $audio = addslashes($_POST['audio']);
    $legenda = addslashes($_POST['legenda']);

    $result = $pdo -> prepare("INSERT INTO obra (titulo, ano_lancamento, classificacao_etaria, tipo, nacionalidade, audio, legenda, id_usuario_obra) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $result -> execute([$titulo, $ano_lancamento, $etaria, $tipo, $nacionalidade,$audio, $legenda, $_SESSION['userId']]);

    header("Location: cadastrar-obra.php");
?>