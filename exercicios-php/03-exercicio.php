<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-Exercicio</title>
</head>
<body>
    <h1>PHP com HTML</h1>
    <hr>
<!-- Nele, desenvolva um programa que determine o valor do ingresso de um show.
Considere os seguintes critérios:
Para idade abaixo de 12 anos, o ingresso custará R$ 25,00 (Infantil)
Quando a idade for menor que 60 anos, o ingresso custará R$ 40,00 (Adulto).
Não sendo nenhuma das condições anteriores, o ingresso custará R$ 20,00 (Melhor Idade).
Mostre no HTML:
A idade da pessoa;
A categoria do ingresso
O valor do ingresso.
Importante: se necessário, utilize a sintaxe alternativa do if, intercalando PHP e HTML.
🔥Desafio 1: faça com que a aparência do ingresso mude de acordo com a categoria. 
Utilize classes CSS diferentes para cada categoria (por exemplo, alterando a cor de fundo, a borda ou outro estilo visual). 
A classe CSS deve ser definida pelo PHP e aplicada ao elemento HTML correspondente.
🔥Desafio 2: existe um recurso do PHP que permite pegar um valor e formatá-lo com símbolo de moeda, separador de milhar e de casas decimais. Descubra qual é o aplique ao valor do ingresso. -->
<?php $idade = 65;
if ($idade < 12):
    $categoria = "Infantil";
    $valor = 25.00;
    elseif ($idade < 60):
    $categoria = "Adulto";
    $valor = 40.00;
    else:
    $categoria = "Melhor Idade";
    $valor = 20.00;
    endif;
?>
<h2>Estadio do Corinthians</h2>
<ul>
    <li><b>Idade da Pessoa:</b> <?= $idade; ?></li>
    <li><b>Categoria do Ingresso:</b> <?= $categoria; ?></li>
    <li><b>Valor do Ingresso:</b> <?= $valor; ?></li>
</ul>
    
</body>
</html>