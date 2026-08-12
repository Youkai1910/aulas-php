<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções do PHP</title>
</head>
<body>
  <div class="container">
       <h1>Trabalhando com Funções</h1>
       <hr>
 
       <h2>Função como procedimento (ou sub-rotina)</h2>
       <p>Procedimentos não retornam nada</p>
 
 
       <?php
       function exibirDadosDoAutor(){
          echo "<h4>Fulano de Tal</h4>";
          echo "<p>Aplicação <b>Back-End</b> como exemplo</p>";
       }
       ?>
          <h3>Chamar/Invocar a funcão/procedimento</h3>
          <?php exibirDadosDoAutor() ?>
          <div><?php exibirDadosDoAutor() ?></div>
 
          <hr>
 
            <h2>Função com parâmetros (ou argumentos)</h2>
 
        <?php
        function somar( $valor1, $valor2 ){
            $total = $valor1 + $valor2;
            return $total;
        }
        ?>
        <h3>Chamada/retorno da funcao somar</h3>
        <p>Resultado 1: <?= somar(50, 170)?> </p>
        <p>Resultado 2: <?= somar(150, 170)?> </p>
        <p>Resultado 3: <?= somar(750, 170)?> </p>
 
        <?php
        // Variável de escopo GLOBAL
        $precoProdutoA = 250;
        $precoProdutoB = 300;
 
        /* Podemos passar valores de outras variáveis para
        os parâmetros de uma função. */
        $resultadoProdutos = somar($precoProdutoA, $precoProdutoB);
        ?>
        <p>Resultado 4: <?= $resultadoProdutos?> </p>
 
        <!-- Utilizando função como parte de condição de um if  -->
        <?php if(somar(100, 500) > 1200): ?>
            <p class="text-success">Meta atingida!</p>
        <?php else: ?>
            <p class="text-danger">Não foi desta vez!</p>
        <?php endif; ?>
 
        <hr>
 
        <h2>Função com parâmetros opcionais</h2>
       
        <?php
        // Nesse caso, deixamos o parâmetro pessoa com um valor padrão (no exemplo, uma string vazia)
        function exibirMensagem($mensagem, $pessoa = "Samuel"){
           return "Olá, $mensagem $pessoa";
        }
        ?>
        <p>Saudação 1: <?= exibirMensagem("boa tarde", "Samuel") ?></p>
        <p>Saudação 2: <?= exibirMensagem("boa Noite", "Samuel") ?></p>

        <hr>

        <h2>Função com indução de tipos de dados</h2>
        <p>Nesta aborgem, definimos tipos de dados para os parâmetros e para o retorno da função.</p>
        <?php 
        function verificarNegativo(int $valor):string {
            if($valor < 0) return "é negativo";
            return "não é negativo";
        };
        ?>
        <p>Número 10: <?= verificarNegativo(10) ?></p>
        <p>Número -10: <?= verificarNegativo(-10) ?></p>
        
<!-- Exclua / ou comente apos o teste: -->
 <!-- <p>Teste para erro: < ?= verificarNegativo("teste") ?></p> -->

 <hr>

 <h2>Função anônima (ou lambda)</h2>
 <?php // Sempre declare primeiro a função
 $multiplicar = function (float $valor1, float $valor2):float {
    return$valor1 * $valor2;
 };
 ?>
 <!-- Repare no uso do $ junto com o nome da função: -->
  <p>Exemplo: <?= $multiplicar(10, 2)  ?></p>

  <hr>

  <h2>Arrow function</h2>
  <?php 
  // Repare que omitimos as chaves e o return
  $subtrair = fn(float $valor1, float $valor2):float => $valor1 - $valor2;
  ?>
  <p>Exemplo: <?= $subtrair(10, 1) ?></p>
    </div>  
</body>
</html>