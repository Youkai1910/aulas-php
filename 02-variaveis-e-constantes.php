<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memória</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <style>
        .destaque { color: red; }
    </style>
</head>
<body>
    <h1>Usando variáveis e constante</h1>
    <hr>
<?php
/* Variáveis */
$curso = "Téc. Informática para interne"; //string
$ano = 2026; // número inteiro
$preco = 2112.55; // número real/ fracionado, decimal

/* Constantes (recomenda-se declarar em letras MAIÚSCULAS ) */
define("PROPRIETARIO", "Fulano de Tal");// antiga
const EMPRESA = "ABC Tecnologia";//moderna

?>
<h2> Exemplos de saídas de dados</h2>
<?php
// Usando concatenação:
echo "<p> Estou fazendo o curso ".$curso."no ano de ".$ano."</p>";
echo "<p>Trabalhando ne empresa <span class='destaque'>".EMPRESA."</span></p>"; // funciona com constante

// Usando interpoação: se usa obrigatoriamente aspa dupla
echo "<p>Estou fazendo o curso $curso no ano de $ano</p>";
echo "<p>Trabalhando ne empresa".EMPRESA." </p>";

// Com aspas simples, a interpolação não funciona. Aparecem os nomes
echo '<p>Estou fazendo o curso $curso no ano de $ano</p>';
?>
<h2>Exemplos de saidsas de dados</h2>
<h3>Usando a sintaxe abreviada/curta do PHP</h3>

<p>Estou fazendo o curso <?php echo $curso?> no ano de <?php echo $ano?> </p>
    <p>Trabalho na empresa <?php echo EMPRESA?> </p>
 
    <!--  Saída abreviada usando comando echo através do sinal de igual -->
    <p>Estou fazendo o curso <?= $curso?> no ano de <?= $ano?> </p>
    <p>Trabalho na empresa <span class="destaque"><?= EMPRESA?></span></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>