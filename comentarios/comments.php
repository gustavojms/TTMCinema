<?php 
    include '../conexao/conexao.php';
    $result = $pdo -> query('SELECT * FROM avaliacao');
    $data = $result -> fetchAll();
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
            <a class="logo">TTMCinema</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../usuario/login.php">Login</a></li>
                <li><a href="../comentarios/comentarios.php">Comentarios</a></li>
                <li><a href="../sugestoes/sugestoes.php">Sugestoes</a></li>
            </ul>
        </nav>
    </header>

    <div class="comentario">
        <h1>Comentarios</h1>
    </div>
    <table>
        <tr>
            <th>Usuario</th>
            <th>Comentario</th>
        </tr>
    <tr>
        <?php foreach($data as $row): ?>
        <td><?= $row[1] ?></td>
        <td><?= $row[2] ?></td>
        <td><a href="remove-comentario.php?id=<?= $row[0]?>" onclick="return confirm('Tem certeza que deseja deletar este item?')"> Deletar </a></td>
    </tr>
    <?php endforeach ?>
</table>
<section class="images">
    <div class="circle"></div>
</section>
<script src="navbar.js"></script>
</body>
</html>