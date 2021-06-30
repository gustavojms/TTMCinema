<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="comment-box">
    <h1>Comentarios</h1>

    <form action="add.php" method="POST">
        <label for="usuario">
            <span>Usuario</span>
            <input type="text" name="usuario" id="usuario">
        </label>

        <label for="comentario">
            <span>Comentario</span>
            <textarea name="comentario" id="comentario" style="resize: none"></textarea>
        </label>

    <button type="submit">Comentar</button>
    <a href="comments.php">Ver comentarios</a>
</form>
</div>

</body>
</html>