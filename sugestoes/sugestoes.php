<?php 
    include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerir</title>
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

    <main>
        <h1>Qual filme gostaria de sugerir?</h1>
    <form action="add-sugestao.php" method="POST">
        <label for="nome_filme">
        <span>Digite o nome do filme</span>
        <input type="text" name="nome_filme" id="nome_filme">
        </label>

        <label for="lancamento">
        <span>Informe a data do lancamento</span>
        <input type="date" name="lancamento" id="lancamento">
        </label>

        <input type="submit" value="Sugerir">
        <a href="sugestao.php">Ver sugestoes</a>
    </form>

    </main>
    <section class="images">
        <div class="circle"></div>
    </section>
    <script src="navbar.js"></script>
</body>

</html>