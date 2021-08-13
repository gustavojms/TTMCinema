<?php
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';
    $id = $_GET['id_obra'];

    if (isset($_POST['comentario']) && !empty($_POST['comentario'])) {
        $comentario = addslashes($_POST['comentario']);

    } else {
        header("Location: /catalogo/obras.php?id_obra=$id");
    }

    if(!Usuario::isLogged()) {
        header("Location: /usuario/login.php");
    }

    $result = $pdo -> prepare("INSERT INTO comentario (comentario, dataAtual, id_obra_cmt, id_user_cmt) VALUES(?, NOW(), ?, ?)");
    $result -> execute([$comentario, $id, $_SESSION['userId']]);

    header("Location: /catalogo/obras.php?id_obra=$id");
?>