<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';

    if(isset($_POST['titulo']) && !empty($_POST['titulo']) && isset($_POST['ano_lancamento']) && !empty($_POST['ano_lancamento']) 
    && isset($_POST['etaria']) && !empty($_POST['etaria']) && isset($_POST['tipo']) && !empty($_POST['tipo']) 
    && isset($_POST['nacionalidade']) && !empty($_POST['nacionalidade']) && isset($_POST['audio'])
    && !empty($_POST['audio']) && isset($_POST['legenda']) && !empty($_POST['legenda'])) {

        
        $titulo = addslashes($_POST['titulo']);
        $ano_lancamento = addslashes($_POST['ano_lancamento']);
        $etaria = addslashes($_POST['etaria']);
        $tipo = addslashes($_POST['tipo']);
        $nacionalidade = addslashes($_POST['nacionalidade']);
        $audio = addslashes($_POST['audio']);
        $legenda = addslashes($_POST['legenda']);

    } else {
        header("Location: /catalogo/cadastrar-obra.php");
    }

    $result = $pdo -> prepare("INSERT INTO obra (titulo, ano_lancamento, classificacao_etaria, tipo, nacionalidade, audio, legenda, id_usuario_obra) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $result -> execute([$titulo, $ano_lancamento, $etaria, $tipo, $nacionalidade,$audio, $legenda, $_SESSION['userId']]);

    header("Location: /catalogo/catalogo.php");
?>