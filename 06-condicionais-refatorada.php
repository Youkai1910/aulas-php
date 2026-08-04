<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Condicionais-Refatorada</title>
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
    <h1>(Refatorada)Trabalahando com estruturas condicionais</h1>
    <hr>

    <h2>Condicional SIMPLES: <code>if</code></h2>
    <?php
    $numero = 50;


    if ($numero > 10) {

    ?> <p><?=  $numero?> é maior que 10.</p>
    <?php
    }
    ?>

    <hr>

    <h2>Condicional Composta: <code>if/else</code></h2>
    <?php
    $produto = "Ultrabook";
    $qtdEmEstoque = 0;
    $qtdCritica = 5;
    ?>
    <h3><?= $produto ?></h3>
    <p><b>Quantidade em estoque:</b><?= $qtdCritica ?></p>

    <?php
    if ($qtdEmEstoque < $qtdCritica) {
        ?>

        <p class="comprar">É necessário comprar/repor</p>

       <?php
        if ($qtdEmEstoque === 0) {
            ?>
            <p><mark class="comprar"> URGENTE!</mark></p>
    <?php
        }
    } else {
        ?>
        <p class="normal">Estoque normal.</p>
  <?php
    } 
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
</body>

</html>