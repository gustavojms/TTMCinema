<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerir</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>Qual filme gostaria de sugerir?</h1>
    <form action="add.php" method="POST">
        <label for="nome_filme">
        <span>Digite o nome do filme</span>
        <input type="text" name="nome_filme" id="nome_filme">
        </label>

        <label for="lancamento">
        <span>Informe a data do lancamento</span>
        <input type="date" name="lancamento" id="lancamento">
        </label>

        <input type="submit" value="Sugerir">
        <a href="sugestoes.php">Ver sugestoes</a>
    </form>

    </main>    
</body>

</html>