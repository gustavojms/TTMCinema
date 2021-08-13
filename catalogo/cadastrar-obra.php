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
    <title>Cadastro de obras - TTMCinema</title>
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
            <?php include '../usuario/navbar.php'; ?>
        </nav>
</header>
<main>
<h1 class="h1-obra">Cadastrar nova obra</h1>

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
    <div class="li-obra">
    <label for="nacionalidade">
        <span>Nacionalidade</span>
        <input type="text" name="nacionalidade" id="nacionalidade">
    </label>

    <label for="audio">
        <span>Audio</span>
        <select name="audio" id="audio">
            <option value="escolha">Escolha o audio</option>
            <option value="pt-BR">pt-BR</option>
            <option value="en-US">en-US</option>
            <option value="jp-JP">jp-JP</option>
            <option value="fr-FR">fr-FR</option>
            <option value="es-ES">es-ES</option>
        </select>
    </label>

    <label for="legenda">
        <span>Legendas</span>
        <select name="legenda" id="legenda">
            <option value="choice">Escolha a legenda</option>
            <option value="pt-BR">pt-BR</option>
            <option value="en-US">en-US</option>
            <option value="jp-JP">jp-JP</option>
            <option value="fr-FR">fr-FR</option>
            <option value="es-ES">es-ES</option>
        </select>
    </label>

    <input type="submit" value="Cadastrar">
    <input type="reset" value="Cancelar">
    </div>
</form>
</main>
<section class="images">
        <div class="circle"></div>
    </section>
    <script src="/assets/js/navbar.js"></script>
</body>
</html>