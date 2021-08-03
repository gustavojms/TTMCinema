<?php 
    include "../conexao/conexao.php";
    $result = $pdo -> query("SELECT * FROM obra");
    $data = $result -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
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
            <ul class="nav-list">
                <li><a href="/index.php">Inicio</a></li>
                <li><a href="/usuario/cadastro.php">Cadastrar</a></li>
                <li><a href="/usuario/login.php">Entrar</a></li>
                <li><a href="/catalogo/catalogo.php">Catalogo</a></li>
            </ul>
        </nav>
    </header>
    <div class="obra">
    <a href="cadastrar-obra.php">Adicionar obra</a>
    </div>
<main>
    <table>
        <tr>
            <th>Nome</th>
            <th>Ano de lancamento</th>
            <th>Classificacao etaria</th>
        </tr>
        <tr class="list">
            <?php foreach($data as $row): ?>
                <td><a href=""><?= $row[1] ?></td></a>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td>
                <?php if ($row['id_usuario'] == $_SESSION['userId']): ?>
                <a href="remove-obra.php?id=<?= $row[0]?>" onclick="return confirmDelete()"> Excluir </a>
                <?php endif ?>
                </td>
        </tr>
        <?php endforeach ?>
    </table>
    </main>
<section class="images">
    <div class="circle"></div>
</section>
<script src="../assets/js/navbar.js"></script>
<script src="../assets/js/script.js"></script>
</body>
</html>