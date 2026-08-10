<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .comprar {
            color: red;
        }

        .normal {
            color: blue;
        }
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
    if ($numero > 10) echo "<p>$numero é maior que 10.</p>";

    //Estrututra alternativa (sem chaves, com : e endif)
    if ($numero > 10):
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
    if ($qtdEmEstoque < $qtdCritica) {
        echo "<p class=\"comprar\">É necessário comprar/repor</p>";

        // condicional ANINHADA
        if ($qtdEmEstoque === 0) {
            echo  "<p><mark class=\"comprar\"> URGENTE!</mark></p>";
        }
    } else {
        echo "<p class= 'normal'>Estoque normal.</p>";
    }
    //if/else versão abreviada(shorthand if) ?;
    $excessoDeEstoque = $qtdEmEstoque > 100 ? "sim" : "não";
    echo $excessoDeEstoque;

    echo "<br>";

    echo $qtdEmEstoque > 100 ? "sim" : "não";
    ?>
    <hr>

    <h2>Condicional ENCADEADA: <code>if, elseif, else</code></h2>
    <?php
    $idade = 15;
    $situacao = ""; // opcional (nem obrigatório declara previamente)
    if ($idade <= 12) {
        $situacao = "criança";
    } elseif ($idade <= 17) {
        $situacao = "adolescente";
    } elseif ($idade <= 59) {
        $situacao = "adulto";
    } else {
        $situacao = "Idoso";
    }
    ?>
    <p>O usuário tem <?= $idade ?> anos é <?= $situacao ?>.</p>

    <h3>Usando os comandos <code>switch/case/default/break</code></h3>
    <?php
    /* Protótico de chatboot
    opções: 1 (Informções), 2 (reclamações), 3 (elogio), x (inválida) */
    $opcao = 2;

    switch ($opcao) {
        case 1:
            echo "<p>Legal, o que quer saber</p>";
            break;
        case 2:
            echo "<p>Que pena, o que houve?</p>";
            break;
        case 3:
            echo "<p>Que bacana, pode falar</p>";
            break;
        default:
            echo "<p>Não entendi... vou chamar alguém</p>";
            break;
    } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>