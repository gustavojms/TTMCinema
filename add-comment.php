<?php
    include '../conexao/conexao.php';

    $comentario = addslashes($_POST['comentario']);
    $sql = $pdo -> query("SELECT id_obra FROM obra");
    $data = $sql -> fetchAll();
    $id = $_GET['id_obra'];

    $result = $pdo -> prepare("INSERT INTO comentario (comentario, id_obra_cmt, id_user_cmt) VALUES(?, ?, ?)");
    $result -> execute([$comentario, $id, $_SESSION['userId']]);

    header("Location: /catalogo/obras.php?id_obra=$id");
?>