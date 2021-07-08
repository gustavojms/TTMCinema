<?php 
    include 'conexao/conexao.php';
    $result = $pdo -> query("SELECT * FROM sugestao");
    $data = $result -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugestoes</title>
    <link rel="stylesheet" href="style.css">
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
                <li><a href="login.php">Login</a></li>
                <li><a href="comentarios.php">Comentarios</a></li>
                <li><a href="sugestoes.php">Sugestoes</a></li>
            </ul>
        </nav>
    </header>
    <div class="sugestao">
    <h1>Sugestoes</h1>
    </div>
    <table>
        <tr>
            <th>Nome do filme</th>
            <th>Data de lancamento</th>
        </tr>
        <tr>
            <?php foreach($data as $row): ?>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <section class="images">
    <div class="circle"></div>
</section>
    <script src="navbar.js"></script>
</body>
</html>