<?php 
    include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/moon.png" type="image/x-icon">
</head>

<body>
<header>
        <nav>
            <a class="logo" href="/">TTMCinema</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="/index.php">Inicio</a></li>
                <li><a href="/usuario/login.php">Login</a></li>
                <li><a href="/comentarios/comentarios.php">Comentarios</a></li>
                <li><a href="/sugestoes/sugestoes.php">Sugestoes</a></li>
            </ul>
        </nav>
    </header>

    <div class="comment-box">
    <h1>Comentarios</h1>

    <form action="add-comment.php" method="POST">
        <label for="usuario">
            <span>Usuario</span>
            <input type="text" name="usuario" id="usuario">
        </label>

        <label for="comentario">
            <span>Comentario</span>
            <textarea name="comentario" id="comentario" style="resize: none"></textarea>
        </label>

    <button type="submit">Comentar</button>
    <a href="comments.php">Ver comentarios</a>
</form>
</div>
<section class="images">
    <div class="circle"></div>
</section>
<script src="navbar.js"></script>
</body>
</html>