<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (Vetores e Matrizes)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <h1>Trabalhando com Arrays</h1>
    <hr>
    <h2>Array numérico/indexado</h2>
    <?php
    //Sintaxe 1: usando colchetes 
    $bandas = ["Metallica", "Iron Maiden", "AC/DC", "Nightwish"];

    //Sintaxe 2: usando a função array()
    $cursos = array("Exel", "JavaScript", "Games 2D", "PHP");

    //Array heterôgeneo (tipos de mistos/variados)
    $coisas = ["Ozzy", 2112, "<b>Senac</b>", 253.487, true];

    //Array como constante
    const FRUTAS = ["morango", "abacaxi"];
    define("FILIAIS", ["São Paulo", "Rio de Janeiro"]);
    ?>
    <h3>Acessando dados de arrays indexados/numéricos</h3>
    <ul>
        <li>Banda que mais gosto: <?= $bandas[3] ?></li>
        <li>Gostaria de estudar mais sobre o <?= $cursos[0] ?></li>
        <li>Estamos estudando no <?= $coisas[2] ?></li>
        <li>Estamos na unidade da cidade de <?= FILIAIS[0] ?></li>
    </ul>

    <h2>Array associativo</h2>
    <p>Lista de dados baseada em uma chave associativa (na prática, é um nome/identificação que você dá), e um valor para ela (o dado em si)</p>
    <?php
    $curso = [
        //chave associativa => valor
        "titulo" => "Gastronomia",
        "carga_horaria" => 800,
        "descricao" => "Aprender a esquenter água pra fazer miojo"
    ];
    const EMPRESA = [
        "nome" => "Biribinha Soluções em TI",
        "ramo" => "Tecnologia",
        "fundacao" => "31/02/2026"
    ];
    ?>
    <h3>Acessando dados de arrays associativo</h3>
    <p>Nome do curso: <b><?= $curso["titulo"] ?></b></p>
    <p>CH: <b><?= $curso["carga_horaria"] ?> horas</b></p>
    <p>Descrição: <b><?= $curso["descricao"] ?></b></p>
    <p>Prestadora de serviço: <b><i><?= EMPRESA["nome"] ?></i></b></p>

    <h2>Arrays de arrays</h2>
    <?php
    //Matriz de arrays indexados
    $planoDeEstudos = [
        ["JS Avançado", "node.js", "Next.js"],
        ["PHP Avançado", "Orientações a Objetos"],
        ["Teoria das Cores", "Photshop", "Canva", "UX/UI"]
    ];
    //Matriz de arrays associativos
    $clientes = [
        [
            "nome" => "Gabriel",
            "me_devendo" => 1000,
        ],
        [
            "nome" => "Messias",
            "me_medevendo" => 500
        ]
    ];
    ?>
    <h3>Acessando dados da Matrizes</h3>
    <p>Meu foco agora é no <?= $planoDeEstudos[1][0] ?></p>
    <p> O <?= $clientes[0]["nome"] ?> me deve <?= $clientes[0]["me_devendo"] ?></p>

    <h2>Funções de anális/debug de estruturas de dados (arrays, objetos)</h2>
    <?php
    //echo $bandas; não funciona, pois o echo não consegue exibir arrays 
    ?>
    <h3><code>print_r()</code></h3>
    <pre><?php print_r($bandas) ?></pre>

    <h3><code>var_dump()</code></h3>
    <pre><?php var_dump($curso) ?></pre>

    <pre><?php var_dump(EMPRESA) ?></pre>

    <pre><?php var_dump($coisas) ?></pre>

    <pre><?php var_dump($clientes) ?></pre>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>

</html>