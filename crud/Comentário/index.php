<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<style>
    textarea {
        width: 400px;
        height: 100px;
        resize: none;
    }

    button {
        width: 100px;
        height: 30px;
        cursor: pointer;
        background-color: #333333;
        border: none;
        color: #fff;
        font-family: arial;
        font-weight: 400;
    }
</style>

<body>
    <form action="add.php" method="POST">
    <textarea name="comentario"></textarea>
    <button type="submit">Comentar</button>
</form>
</body>

</html>