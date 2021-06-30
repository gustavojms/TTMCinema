<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<main>
    <h1>Cadastrar</h1>

    <form action="add.php" method="POST">
        <label for="nome">
        <span>Nome</span>
        <input type="text" name="nome" id="nome">
        </label>

        <label for="usuario">
        <span>Usuario</span>
        <input type="text" name="usuario" id="usuario">
        </label>

        <label for="senha">
        <span>Senha</span>
        <input type="password" name="senha" id="senha">
        </label>

        <input type="submit" value="Cadastrar">


    </form>

</main> 
<section class="images"></section>
</body>

</html>