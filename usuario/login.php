<?php
    include '../conexao/conexao.php';
    include '../usuario/UsuarioClass.php';
    if(Usuario::isLogged()) {
        header("Location: /index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login TTM</title>
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
            <?php include 'navbar.php' ?>
        </nav>
    </header>
       <main> 
        <h1>Login</h1>
        <form action="logar.php" method="POST">
            <label for="usuario">
                <span>Usuario</span>
                <input type="text" name="usuario" id="usuario">
            </label>

            <label for="senha">
                <span>Senha</span>
                <input type="password" name="senha" id="senha">
            </label>

            <input type="submit" value="Entrar">
            <a href="cadastro.php">Clique aqui caso não seja cadastrado</a>
        </form>
        </main>
        <section class="images">
        <div class="circle"></div>
    </section>
    <script src="navbar.js"></script>        
</body>

</html>