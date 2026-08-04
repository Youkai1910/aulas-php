<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
    <style>
        .comprar { color: red;}
        .normal { color: blue;}
    </style>
</head>

<body>
    <h1>Trabalahando com estruturas condicionais</h1>
    <hr>
    <!-- Lembrete: ao usar condicionais, muitas vezes também usaremos operadores relacionais:
     <, <=, >=, ==, !=, ===, -->
    <h2>Condicional SIMPLES: <code>if</code></h2>
    <?php
    $numero = 50;

    //Estrututra tradicional (comando, Parenteses, chaves)
    if ($numero > 10) {
        echo "<p>$numero é maior que 10.</p>";
    }

    //Estrututra abreviada (sem chaves)
    if ($numero > 10) echo "<p>$numero é maior que 10.</p>" ;

    //Estrututra alternativa (sem chaves, com : e endif)
    if($numero > 10):
        echo "<p>$numero é maior que 10.</p>";
    endif;
    ?>
    <hr>
    <h2>Condicional Composta: <code>if/else</code></h2>
    <?php 
    $produto = "Ultrabook";
    $qtdEmEstoque = 30;
    $qtdCritica = 5;
     ?>
     <h3><?= $produto ?></h3>
     <p><b>Quantidade em estoque:</b><?= $qtdCritica ?></p>

     <?php
     if ($qtdEmEstoque < $qtdCritica){
        echo "<p class=\"comprar\">É necessário comprar/repor</p>";

        // condicional ANINHADA
        if ($qtdEmEstoque === 0) {
            echo  "<p><mark class=\"comprar\"> URGENTE!</mark></p>";
        }

    }else {
        echo "<p class= 'normal'>Estoque normal.</p>";
     }
     ?>
</body>

</html>