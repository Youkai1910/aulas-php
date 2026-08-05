<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops-PHP</title>
</head>
<body>
    <h1>Trabalhando com comandos de repetição</h1>
    <hr>

    <h2>while (enquanto)</h2>
    <p>Executações repetidas vezes <b>enquanto</b>a condição  for <b>verdadeira</b>.</p>
    <?php 
    $i = 1;
    while($i <= 5): // ou {
    ?>
    <p>Parágrafo: <?= $i ?></p>
    <?php 
    $i++;
    endwhile; // ou }
    ?>
</body>
</html>