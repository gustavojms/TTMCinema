<?php 
    include 'conexao/conexao.php';
    include 'usuario/UsuarioClass.php';
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
                <?php include 'usuario/navbar.php'; ?>
        </nav>
    </header>
<main>
    <h2>Bem vindo ao nosso projeto</h2>
        <p>Um projeto de entretenimento criado por estudantes da área de tecnologia.</p>
        <p>Aqui você pode fazer o cadastro de suas obras favoritas, visualizar sobre as obras cadastradas por outros usúarios e deixar um comentário referente a ela.</p>
        <p>Caso deseje cadastrar alguma obra, é necessário a criação de uma conta para que seja permitido tal ação, também é necessário ter uma conta no nosso sistema caso deseje comentar, caso queira apenas visualizar o conteúdo já publicado pelos usuários não será necessário a criação de uma conta.</p>
        <p>Este projeto foi inteiramente feito usando as linguagens de PHP, HTML5 e CSS3.</p>
        <p>Você consegue fazer toda a navegação pela barra de navegações no topo da página.</p>
</main>
<section class="images">
    <div class="circle"></div>
</section>
<script src="assets/js/navbar.js"></script>
</body>
</html>