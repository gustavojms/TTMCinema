<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';
    if(isset($_GET['id_obra']));
    $id = $_GET['id_obra'];
    $result = $pdo -> query("SELECT * FROM obra WHERE id_obra = '$id'");
    $data = $result -> fetchAll();
    $stmt = $pdo -> query("SELECT comentario FROM comentario WHERE id_obra_cmt = '$id'");
    $dado = $stmt -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras</title>
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
            <?php if (!Usuario::isLogged()): ?>
            <ul class="nav-list">
                <li><a href="/index.php">Inicio</a></li>
                <li><a href="/usuario/cadastro.php">Cadastrar</a></li>
                <li><a href="/usuario/login.php">Entrar</a></li>
                <li><a href="/catalogo/catalogo.php">Catalogo</a></li>
            </ul>
            <?php else: ?>
            <ul class="nav-list">
                <li><a href="/index.php">Inicio</a></li>
                <li><a href="/catalogo/catalogo.php">Catalogo</a></li>
                <li><a href="/usuario/login.php">Entrar</a></li>
                <li><a href="/usuario/logout.php">Sair</a></li>
            </ul>
            <?php endif ?>
        </nav>
    </header>
<main>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Ano de lançamento</th>
            <th>Classificação Etária</th>
            <th>Nacionalidade</th>
            <th>Legenda</th>
        </tr>
        <tr class="list">
            <?php foreach($data as $row): ?>
                <td><a href="obras.php?id_obra=<?= $row['id_obra'] ?>"> <?= $row['titulo'] ?></td></a>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td><?= $row[5] ?></td>    
                <td><?= $row[7] ?></td> 
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

    <table class="comentario">
        <tr>
            <th>Comentarios</th>
        </tr>
        <tr>
            <?php foreach($dado as $dados): ?>
                <td><?= $dados['comentario']?></td>
        </tr>
        <?php endforeach ?>
    </table>
</main>
<section class="images">
    <div class="circle"></div>
</section>
<script src="../assets/js/navbar.js"></script>
</body>
</html>