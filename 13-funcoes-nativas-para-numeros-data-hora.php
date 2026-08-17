<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Numeros, Data e Hora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <h1>Funções nativas: números, data e hora</h1>
      <hr>
      <h2>Números</h2>
      <h3>max()</h3>
      <p>Maior valor na lista:
      <?= max(10, -5, 12, 150, 0, 1236.45) ?></p>
      <p>Menor valor na lista passada:
        <?= min(10, -5, 12, 150, 0, 12436.45) ?>
      </p>
      <?php 
      $listaDeNumeros = [2,10, 1000, 435, 0, -2];
      ?>
      <p>Maior valor existente no array:
        <?= max($listaDeNumeros) ?>
      </p>
      <p>Menor valor existente no array:
        <?= min($listaDeNumeros) ?>
      </p>
           
      <h3>round(), ceil(), floor(), rand()</h3>
      <!-- roud(): varia conforme o valor -->
       <p>Arredondamento: <b><?= round(4.7) ?></b></p>
       <p>Arredondamento: <b><?= round(4.2) ?></b></p>
       <p>Arredondamento: <b><?= round(4.5) ?></b></p>
       <p>Arredondamento para cima: <b><?= ceil(4.2) ?></b></p>
       <p>Arredondamento para baixo: <b><?= floor(4.9) ?></b></p>

       <h3>number_format()</h3>

       <?= 
       $preco = 1056.86;
       $numeroComMuitasCasasDecimais = 1458.4567123;
       ?>
       <p>Preço formatado:
        <b>R$ <?= number_format($preco, 2, ", ", ".") ?></b>
        <p>Número com ajuste de casas decimais:
            <?= number_format($numeroComMuitasCasasDecimais, 3) ?>
        </p>

        <hr>

        <h2>Data e Hora</h2>
        <h3>date(), date_default_timezone_set(), strtotime()</h3>
        <?php 
        date_default_timezone_set("America/Sao_Paulo");
        $data = date("d/m/Y");
        $hora = date("H:i:s");
        $dataHora = date("d/m/y H:i");
        ?>
        <p>Data: <?= $data ?></p>
        <p>Hora: <?= $hora ?></p>
        <p>Data e hora: <?= $dataHora ?></p>
        <?php 
        $dataFormatoBD = "2020-09-11";

        /*Usamos o strtotime para converter primeiro a data em um timestamp (data em formato numérico). Em seguida, o date aplica o formato desejado. */
        $dataFormatada = date("d/m/y", strtotime($dataFormatoBD));
        ?>
        <p>Data (em formato de sistema/banco): <?= $dataFormatoBD ?></p>
        <p>Data (convertida e formatada): <?= $dataFormatada ?></p>
    

</div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  
</body>
</html>