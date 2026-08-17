<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>Funções nativas para arrays</h1>
<hr>
<h2>implode()</h2>
<p>transforma array em uma  string.</p>

<?php 
$arrayBandas = ["Pink Floyd", "Genesis", "Yes"];
$textoBandas = implode(" - ", $arrayBandas);
?>
<pre><?php var_dump($arrayBandas) ?></pre>
<pre><?php var_dump($textoBandas) ?></pre>

<hr>

<h2>extract</h2>
<p>Extrai chaves associativas para variaveis.</p>
<?php 
$aluno = ["id" => 1, "nome" => "Fulano", "idade" => 25];
extract($aluno, EXTR_PREFIX_ALL, "chave");
//Usamos o segundo parametro para definir um prefixo para os nomes
// Isso evita conflito/sobreescrita de outras vaiáveis.
?>
<ul>
    <li>ID: <?= $chave_id ?></li>
    <li>Nome: <?= $chave_nome ?></li>
    <li>Idade: <?= $chave_idade ?></li>
</ul>
<p>Variável <code>$nome</code> original: <?= $chave_nome ?></p>

<hr>

<h2>array_sum()</h2>
<p>Somando os valores de um array</p>
<?php
$carrinhoDeCompras = [
    "TV_Led" => 1200,
    "Ultrabook" => 2500,
    "Geladeira" => 3000
];
$total = array_sum($carrinhoDeCompras);
?>
<p>Total: <?= $total ?></p>

<hr>

<h2>array_unique()</h2>
<p>Gera um novo array removendo elementos duplicados/repetidos em um array</p>
<?php 
$categorias = [
    "Eletrônicos", "Livros", "Roupas", "Livros", "Games",
    "Eletrônicos"
];
 $categoriasUnicas = array_unique($categorias);
?>
<pre><?php var_dump($categorias) ?></pre>
<pre><?php var_dump($categoriasUnicas) ?></pre>

<hr>

<h2>array_merge</h2>
<p>Junta dados de arrays  diferentes.</p>
<?php 
$produtoFilialNorte = ["Mouse", "teclado"];
$produtoFilialSul = ["monitor", "Webcam", "Pendrive"];

//$produtos = array_merge($produtoFilialNorte, $produtoFilialSul);
$produtos = array_unique(
    array_merge($produtoFilialNorte, $produtoFilialSul)
);
?>
<pre><?php var_dump($produtos) ?></pre>

<hr>

<h2>array_combine()</h2>
<p>Cria um novo a partir de uma lista de valores e uma lista de chaves.</p>
<?php 
$games = ["Super_Mario", "Sonic", "Final_Fantasy"];

$precos = [99, 50, 129];

$catalago = array_combine($games, $precos);
?>
<pre><?php var_dump($catalago) ?></pre>

<hr>

<h2>array_map()</h2>
<p>Percorre cada elemento de um array, executa uma função (chamada de callback) e gera um novo array com os resultados.</p>
<?php 
$catalagoComDesconto = array_map(function(float $preco):float{
    return $preco - $preco * 0.10;
}, $catalago);
?>
<pre><?php var_dump($catalagoComDesconto) ?></pre>

<hr>

<h2>array_filter()</h2>

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>