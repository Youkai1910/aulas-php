<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento dos Dados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Recebimento e processamento dos dados</h1>
        <hr>
        <?php

        $erros = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            // Capturando os dados de cada campo
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            $mensagem =  filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

            $interessesValidos = ["html", "css", "javascript"];

            $interesses = filter_input(INPUT_POST, 'intetresses', FILTER_SANITIZE_SPECIAL_CHARS) ?? [];
            if (!is_array($interesses)) {
                $interesses = [];
                $erros[] = "!Seleção inválida de interesses";
            }
            $interessesValidados = array_intersect($interesses, $interessesValidos);

            $opcoesValidas = ["sim", "nao"];

            $informativos = filter_input(INPUT_POST, 'informativos', FILTER_SANITIZE_SPECIAL_CHARS);

            $informativos = in_array($informativos, $opcoesValidas) ? $informativos : "nao";

            if (empty($nome)) $erros[] = "O campo nome é  obrigatório";
            if (empty($email)) $erros[] = "O email de ser informado";
            if (empty($mensagem)) $erros[] = "Você deve escrever uma mensagen";

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = "O email não é válido";

            $filtroIdade = [
                "options" => [
                    "min_range" => 0,
                    "max_range" => 120,
                ]
            ];

            if (!filter_var($idade, FILTER_VALIDATE_INT, $filtroIdade)) {
                $erros[] = "Idade inválida. A idade de estar entre 0 e 120";
            }
            if (!empty($erros)):

        ?>
                <div class="alert alert-danger">
                    <h2>
                        <ul class="mb-3">
                            <?php foreach ($erros as $erro):  ?>
                                <li><?= $erro ?></li>
                            <?php endforeach ?>
                        </ul>
                    </h2>
                </div>
            <?php else: ?>
                <h2>Dados recebidos</h2>
                <p>Nome: <?= $nome ?></p>
                <p>E-mail: <?= $email ?></p>
                <p>Idade: <?= $idade ?> anos</p>
                <p>Mensagem: <?= $mensagem ?></p>

                <?php if (!empty($interessesValidados)): ?>
                    <p>Interesses: <?= implode(", ", $interessesValidados) ?></p>
                <?php endif; ?>

                <p>Informativos: <?= $informativos === 'sim' ? "Sim" : "Não" ?></p>

            <?php
            endif;
        } else { ?>
            <div class="alert alert-danger">
                <h2>Acesso inválido!</h2>
                <p>Você deve usar o formulário para enviar os dados.</p>
                <hr>
                <a href="17-formulario.html" class="btn btn-primary">Ir para o formulario</a>
            </div>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>