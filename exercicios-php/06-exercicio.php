<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<h1>Exercício para entregar</h1>
<hr>

<!-- Pesquisando outras funções para trabalhar com datas e horários em PHP
Vence hoje às 12:00.
Vários envios permitidos
Instruções
Sua tarefa será pesquisar outras funções do PHP que também podem ser utilizadas para trabalhar com datas, horários e informações como dia, mês, ano, hora, minuto e segundo. 
Funções que devem ser pesquisadas 
Pesquise sobre as seguintes funções: 
time() 
getdate() 
mktime() 
checkdate() 
Para cada função, faça o seguinte: 
Explique, com suas próprias palavras, qual é a finalidade da função. 
Informe quais são os parâmetros que ela recebe, quando houver. 
Explique qual é o valor retornado pela função. 
Crie e implemente pelo menos um exemplo funcional em PHP. 
Execute o código e analise o resultado. 
Organização.
Dentro da pasta exercicios, crie o arquivo exercicio06-pesquisa.php e separe o conteúdo utilizando títulos para cada função pesquisada. 
🔥Desafio 
Após pesquisar e implementar exemplos individuais, crie um pequeno exemplo prático utilizando pelo menos duas das funções pesquisadas. 
Algumas possibilidades: 
criar uma data e hora específica utilizando mktime(); 
obter informações da data atual utilizando getdate(); 
verificar se uma data informada é válida utilizando checkdate(); 
trabalhar com o timestamp atual utilizando time(). 
Importante: a pesquisa deve servir como apoio para a compreensão das funções. Procure entender o funcionamento de cada uma delas e implemente os exemplos testando o resultado no navegador. 
Entrega
Assim que concluir, você deve fazer a entrega do arquivo exercicio06-pesquisa.php aqui no Teams. -->
<h2>Função time() no PHP</h2>
<p>a função time() não calcula por si mesma ela fornece numeros base necessário. A função time e como um conômetro gigante que começou a funcionar e avança 1 número a cada segundo. A função time() não precisa de parâmetros de entrada pois a função time() funciona como Relógio a mesma so tem Saída(retorno) em um único número inteiro que representa os segundos atuais.</p>
<?php 
date_default_timezone_set('America/Sao_Paulo');
$agora = time(); 
$dataEHora = date('d/m/Y H:i:s', $agora);
echo "A data de hoje é: " . $dataEHora;
?>

<p>Timestamp (que em português significa literalmente "carimbo de data/hora") é um formato padrão usado na computação para registrar o momento exato em que um evento aconteceu.</p>

<hr>

<h2>Função getdate()</h2>
<p>A melhor forma de entender a getdate() é pensar nela como uma caixa organizadora (um array associativo) que separa o tempo em várias gavetas etiquetadas. 
    A Caixa Organizadora é a variável (ex: $tempo).
    As Gavetas Etiquetadas são as chaves do array (ex: ['year'], ['mday'], ['hours'])</p>
    <?php
date_default_timezone_set('America/Sao_Paulo');

$caixaDeTempo = getdate();
$mesesEmPortugues = [
    1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
    5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
    9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
];
$diasEmPortugues = [
    0 => 'Domingo', 1 => 'Segunda-feira', 2 => 'Terça-feira',
    3 => 'Quarta-feira', 4 => 'Quinta-feira', 5 => 'Sexta-feira', 6 => 'Sábado'
];

$mesNumero = $caixaDeTempo['mon'];
$diaSemanaNumero = $caixaDeTempo['wday'];

echo "Dia do mês: " . $caixaDeTempo['mday'] . "<br>";
echo "Mês: " . $mesesEmPortugues[$mesNumero] . "<br>";
echo "Ano: " . $caixaDeTempo['year'] . "<br>";
echo "Dia da semana: " . $diasEmPortugues[$diaSemanaNumero] . "<br>";
echo "Horário brasileiro: " . $caixaDeTempo['hours'] . ":" . $caixaDeTempo['minutes'] . ":" . $caixaDeTempo['seconds'] . "<br>";
?>

<hr>

<h2>Função mktime()</h2>
<p>O mktime() funciona como uma maquina do tempo permite voce retorna no tempo ou uma viagem ao futuro.</p>
<?php
date_default_timezone_set('America/Sao_Paulo');
$dataFabricada = mktime(15, 30, 0, 1, 1, 2030);
echo "Data da viagem ao futuro: " . date('d/m/Y H:i:s', $dataFabricada);
?>

<hr>

<h2>Funções checkdate</h2>
<p>A melhor forma de entender a checkdate() é pensar nela como um fiscal de calendário. A única função dela é olhar para um dia, um mês e um ano e dizer se essa data realmente existe ou se é uma invenção.Ela é o segurança que protege o seu sistema contra erros e fraudes. Se um usuário tentar se cadastrar no seu site dizendo que nasceu no dia 31 de fevereiro, o fiscal entra em ação, percebe que essa data é impossível e a barra na hora.O mais legal é que ela é muito inteligente: ela sabe de cabeça quais meses têm 30 ou 31 dias e faz todas as contas matemáticas para descobrir se o ano é bissexto, validando o dia 29 de fevereiro automaticamente.Resumo em 3 pontos rápidos:O que ela faz: Valida se uma data é real ou falsa.Como ela pede as informações: Sempre na ordem checkdate(mês, dia, ano).O que ela responde: Ela só diz Sim (true) ou Não (false).</p>

<?php

$dataReal = checkdate(2, 29, 2024); 

if ($dataReal) {
    echo "29/02/2024 é uma data VÁLIDA!<br>";
} else {
    echo "29/02/2024 é uma data INVÁLIDA!<br>";
}

$dataFalsa = checkdate(2, 29, 2026);

if ($dataFalsa) {
    echo "29/02/2026 é uma data VÁLIDA!";
} else {
    echo "29/02/2026 é uma data INVÁLIDA!";
}
?>

<hr>

<h2>Funções Trabalhando juntos</h2>
<p>A caixa organizadora (getdate) abre o dia atual para mostrar uma mensagem de boas-vindas na tela. Em seguida, o fiscal (checkdate) garante que a data do cupom realmente existe no calendário. Com a data aprovada, a máquina do tempo (mktime) calcula os segundos do prazo final do cupom, enquanto o cronômetro (time) fornece os segundos do exato momento de agora. O sistema compara esses dois números e decide na hora se o desconto ainda está valendo ou se já venceu.</p>
<?php
date_default_timezone_set('America/Sao_Paulo');


$diaCupom = 25; $mesCupom = 12; $anoCupom = 2026;


$hoje = getdate();
echo "<h3>🗓️ Hoje é dia " . $hoje['mday'] . " do mês " . $hoje['mon'] . "</h3>";
echo "<h4>🎟️ Verificador de Cupons</h4>";


if (checkdate($mesCupom, $diaCupom, $anoCupom)) {
    
    
    $timestampVencimento = mktime(23, 59, 59, $mesCupom, $diaCupom, $anoCupom);
    
    
    $timestampAgora = time();
    
    
    if ($timestampAgora > $timestampVencimento) {
        echo "❌ Desculpe! Este cupom já expirou.";
    } else {
        echo "✅ Parabéns! Cupom válido. Aproveite seu desconto!";
    }
} else {
    echo "⚠️ Erro: Data do cupom inválida!";
}
?>







 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>   
</body>
</html>