<?php 
    include 'conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTMCinema</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/moon.png" type="image/x-icon">
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
            <ul class="nav-list">
                <li><a href="/index.php">Inicio</a></li>
                <li><a href="/usuario/cadastro.php">Cadastrar</a></li>
                <li><a href="/usuario/login.php">Entrar</a></li>
                <li><a href="/catalogo/catalogo.php">Catalogo</a></li>
            </ul>
        </nav>
</header>
<div class="home">
<a href="/usuario/logout.php">Sair</a>
</div>
<main>
    <div class="user">
    <h1>Olá, <?php echo $_SESSION['userL']?></h1>
    </div>
</main>
</body>
<script src="assets/js/navbar.js"></script>
</html>