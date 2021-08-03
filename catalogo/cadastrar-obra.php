<?php 
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';
    if(!Usuario::isLogged()) {
        header("Location: /usuario/login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de obras</title>
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
<h1>Cadastrar nova obra</h1>

<form action="add-obra.php" method="POST">
    <label for="titulo">
        <span>Titulo</span>
        <input type="text" name="titulo" id="titulo">
    </label>

    <label for="ano_lancamento">
        <span>Ano de lancamento</span>
        <input type="text" name="ano_lancamento" id="ano_lancamento">
    </label>

    <label for="etaria">
        <span>Classificacao etaria</span>
        <input type="year" name="etaria" id="etaria">
    </label>

    <label for="tipo">
        <span>Tipo</span>
        <select id="tipo" name="tipo">
            <option value="tipo">Escolha o tipo</option>
            <option value="filme">Filme</option>
            <option value="serie">Serie</option>
            <option value="anime">Anime</option>
        </select>
    </label>

    <input type="submit" value="Cadastrar"></button>
    <a href="catalogo.php">Ver catalogo</a>
</form>
</main>  
</body>
</html>