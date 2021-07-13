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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="usuario/login.php">Login</a></li>
                <li><a href="comentarios/comentarios.php">Comentarios</a></li>
                <li><a href="sugestoes/sugestoes.php">Sugestoes</a></li>
            </ul>
        </nav>
    </header>
    <h1>Olá, <?php echo $_SESSION['userL']?></h1>
</body>
<script src="assets/js/navbar.js"></script>
</html>