<?php 
    $data = file('source.csv');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugestoes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="sugestao">
        <h1>Filmes sugeridos</h1>
    </div>
    <table>
       <?php foreach($data as $dados => $conteudo): ?>
    <tr>
        <?php $dado = explode(',' , $dados); ?>    
        <?php foreach ($dado as $content): ?>
          <td> <?= $content , $conteudo ?> </td>
      <?php endforeach ?>
    </tr>
    <?php endforeach ?>
    </table>
</body>
</html>