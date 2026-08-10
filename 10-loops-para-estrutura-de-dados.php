<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops para estruturas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Loops para estrutura de dados</h1>
        <hr>

        <?php
        $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"]; ?>

        <h2>Usando o loop for para acessar o array</h2>
        <ol>
            <?php for ($i = 0; $i < count($meses); $i++) { ?>
                <li> <?= $meses[$i] ?></li>
            <?php } ?>
        </ol>

        <hr>

        <h2>Usando o loop for para acessar uma matriz (array de arrays)</h2>

        <?php
        $planoDeEstudo = [
            ["JS Avançado", "Node.js", "Next.js"],
            ["PHP", "Orientação a Objetos"],
            ["Teoria das Cores", "photoshop com IA", "UX/UI"]
        ];
        $linhas = count($planoDeEstudo);
        for ($i = 0; $i < $linhas; $i++)://acessa cada linha
            $colunas = count($planoDeEstudo[$i]);
            for ($j = 0; $j < $colunas; $j++)://acessa cada coluna
        ?>
                <p><?= $planoDeEstudo[$i][$i] ?></p>
        <?php
            endfor;// fim do acesso a cada coluna
        endfor;// fim do acesso a cada linha 
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>