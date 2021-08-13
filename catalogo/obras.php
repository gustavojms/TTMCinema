<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';
    if(isset($_GET['id_obra']));
    $id = $_GET['id_obra'];
    $result = $pdo -> query("SELECT * FROM obra WHERE id_obra = '$id'");
    $data = $result -> fetchAll();
    $stmt = $pdo -> query("SELECT * FROM comentario WHERE id_obra_cmt = '$id'");
    $dado = $stmt -> fetchAll();
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Obras - TTMCinema</title>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="icon" href="/assets/img/moon.png" type="image/x-icon">
    </head>
    <body>
        <header>
            <nav>
                <a class="logo">TTMCinema</a>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
               <?php include '../usuario/navbar.php'; ?>
            </nav>
        </header>
<main>
    <table>
        <tr>
            <th>Título</th>
            <th>Ano de lançamento</th>
            <th>Classificação Etária</th>
            <th>Tipo</th>
            <th>Nacionalidade</th>
            <th>Audio</th>
            <th>Legendas</th>
        </tr>
        <tr class="list">
            <?php foreach($data as $row): ?>
                <td><a href="obras.php?id_obra=<?= $row['id_obra'] ?>"> <?= $row['titulo'] ?></td></a>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td><?= ucfirst($row[4]) ?></td>
                <td><?= strtoupper($row[5]) ?></td>    
                <td><?= $row[6] ?></td> 
                <td><?= $row[7] ?></td>
        </tr>
        
        <?php endforeach ?>
    </table>

    <table class="comentario">
        <tr>
            <th>Comentários</th>
            <th>Data do comentário</th>
        </tr>
        <tr>
            <?php foreach($dado as $dados): ?>
                <td><?= $dados['comentario']?></td>
                <td><?= $dados['dataAtual']?></td>
                <td>
            <?php if (Usuario::isLogged() && $dados['id_user_cmt'] == $_SESSION['userId']): ?>
                    <a href="/comentarios/remove-comentario.php?id_obra=<?= $dados['id_obra_cmt'] ?>&id_comentario=<?= $dados['id_comentario'] ?>"> Excluir </a>        
            <?php endif ?>
                </td>
        </tr>
        <?php endforeach ?>
    </table>

    <div class="comment-box">
    <form action="/comentarios/add-comment.php?id_obra=<?= $row['id_obra'] ?>" method="POST">
        <label for="comentario">
            <textarea name="comentario" id="comentario" style="resize: none" placeholder="Escrever um comentário..."></textarea>
        </label>
    <button type="submit">Comentar</button>
    </form>
    </div>

</main>
<section class="images">
    <div class="circle"></div>
</section>
<script src="../assets/js/navbar.js"></script>
</body>
</html>