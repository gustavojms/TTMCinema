<?php
    include '../conexao/conexao.php';
    $id = $_GET['id_obra'];

    if (isset($_POST['comentario']) && !empty($_POST['comentario'])) {
        $comentario = addslashes($_POST['comentario']);

    } else {
        header("Location: /catalogo/obras.php?id_obra=$id");
    }

    $sql = $pdo -> query("SELECT id_obra FROM obra");
    $data = $sql -> fetchAll();

    $result = $pdo -> prepare("INSERT INTO comentario (comentario, id_obra_cmt, id_user_cmt) VALUES(?, ?, ?)");
    $result -> execute([$comentario, $id, $_SESSION['userId']]);

    header("Location: /catalogo/obras.php?id_obra=$id");
?>