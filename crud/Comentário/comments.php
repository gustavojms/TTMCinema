<?php 
    $data = file('source.csv');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="comentario">
        <h1>Comentarios</h1>
    </div>
    <table>
       <?php foreach($data as $dados => $conteudo): ?>
    <tr>
        <?php $dado = explode(',' , $dados); ?>    
        <?php foreach ($dado as $content): ?>
            <td> <?= $content, $conteudo ?> <a href="remove.php?line=<?= $dados ?>">Remover comentario</a> </td>
            <?php endforeach ?>
        </tr>
        <?php endforeach ?>
</table>
</body>
</html>