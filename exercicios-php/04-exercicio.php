<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <style>
        /*  "Para estilizar as celulas de uma determinada linha:" */
     tr:nth-child(1) td { background-color: blue; color: white;}
     tr:nth-child(2) td { background-color: red; color: white;}
     tr:nth-child(3) td { background-color: blue; color: white;}
     tr:nth-child(4) td { background-color: red; color: white;}
     tr:nth-child(5) td { background-color: blue; color: white;}
    </style>

</head>

<body>
    <!--
Nele, programe uma estrutura de dados com 5 nomes de linguagens, cada uma com um identificador numérico e uma pequena descrição.
Exemplo:
HTML: Estruturação
CSS: Estilos
JS: Comportamentos
PHP: Back-End
SQL: Manipulação de dados
Em seguida, use loop para iterar sobre esta estrutura de dados e exibir todos os dados na página usando tags básicas, como h2, p, b, ul e li.-->
    <div class="container">
        <h1>Estrutura de Dados</h1>
        <hr>
        <?php
        $linguagens = [
            [
                "nome" => "HTML",
                "indentificador" => 1,
                "descrição" => "Estruturação"
            ],
            [
                "nome" => "CSS",
                "indentificador" => 2,
                "descrição" => "Estilos"
            ],
            [
                "nome" => "JS",
                "indentificador" => 3,
                "descrição" => "Comportamentos"
            ],
            [
                "nome" => "PHP",
                "indentificador" => 4,
                "descrição" => "Back-End"
            ],
            [
                "nome" => "SQL",
                "indentificador" => 5,
                "descrição" => "Manipulação de dados"
            ]
        ]; ?>

        <?php foreach ($linguagens as $linguagem): ?>
            <h2><?= $linguagem['nome'] ?></h2>
            <p>Descrição: <?= $linguagem['descrição'] ?></p>

            <ul>
                <li><b>ID:</b> <?= $linguagem['indentificador'] ?></li>
            </ul>
        <?php endforeach; ?>

        <hr>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Linguagem</th>
                    <th>Descrição</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($linguagens as $linguagem): ?>
                    <tr>
                        <td><?= $linguagem['indentificador'] ?></td>
                        <td><?= $linguagem['nome'] ?></td>
                        <td><?= $linguagem['descrição'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>