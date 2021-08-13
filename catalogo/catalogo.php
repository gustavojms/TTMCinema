<?php 
    include "../conexao/conexao.php";
    include '../usuario/UsuarioClass.php';
    $result = $pdo -> query("SELECT * FROM obra");
    $data = $result -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo - TTMCinema</title>
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
            <?php include '../usuario/navbar.php'; ?>
        </nav>
    </header>
    <div class="obra">
    <a href="cadastrar-obra.php">Adicionar obra</a>
    </div>
<main>
    <table>
        <tr>
            <th>Titulo</th>
        </tr>
        <tr class="list">
            <?php foreach($data as $row): ?>
                <td><a href="obras.php?id_obra=<?= $row['id_obra'] ?>"><?= $row[1] ?></td></a>
                <td>
            <?php if (Usuario::isLogged() && $row['id_usuario_obra'] == $_SESSION['userId']): ?>
                    <a href="remove-obra.php?id=<?= $row[0] ?>"> Excluir </a>        
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