<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios-05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
     tr:nth-child(1) td { background-color: greenyellow; color: black;}
     tr:nth-child(2) td { background-color: whitesmoke; color: black;}
     tr:nth-child(3) td { background-color: yellow; color: black;}
     tr:nth-child(4) td { background-color: greenyellow; color: black;}
     tr:nth-child(5) td { background-color: whitesmoke; color: black;}
    </style>
</head>

<body>
    <!--Nele, crie três variáveis para representar as notas de um aluno.
 Crie duas funções: uma para os processos de cálculo da média, e outra para os processos de verificação da situação do aluno.
 Chamando as funções, passando os dados para elas e obtendo seus retornos, calcule a média destas notas e verifique a situação do aluno (aprovado ou reprovado). O critério para ser aprovado é ter média a partir de 7.
 Mostre no HTML usando as tags de sua preferência.
 Desafios:
Usando o Bootstrap, formate em vermelho se o aluno estiver reprovado, e em verde se estiver aprovado.
Adapte o exercício para que funcione com uma lista de 5 alunos, com suas respectivas 3 notas. -->

    <div class="container">
        <h1>Exercicios de funções do PHP</h1>

        <hr>
        <?php

        function calcularMedia($notas)
        {
            $soma = 0;
            $quantidade = 0;

            foreach ($notas as $nota) {
                $soma = $soma + $nota;
                $quantidade = $quantidade + 1;
            }

            return $soma / $quantidade;
        }

        function verificarSituacao($media)
        {
            if ($media >= 7) {
                return 'Aprovado';
            } else {
                return 'Reprovado';
            }
        }

        $alunos = [
            ["nome" => "Ana Silva", "notas" => [8.5, 7.0, 9.0]],
            ["nome" => "Bruno Costa", "notas" => [5.0, 6.5, 4.0]],
            ["nome" => "Carlos Souza", "notas" => [7.0, 7.5, 7.0]],
            ["nome" => "Daniela Lima", "notas" => [5.0, 10.0, 9.5]],
            ["nome" => "Eduardo Alves", "notas" => [6.0, 5.5, 7.0]]
        ];
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nome do Aluno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Média</th>
                        <th>Situação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alunos as $aluno):
                        $media = calcularMedia($aluno['notas']);
                        $situacao = verificarSituacao($media);
                        $classeCor = ($situacao === 'Aprovado') ? 'text-success fw-bold' : 'text-danger fw-bold';
                        $classeLinha = ($situacao === 'Aprovado') ? 'table-success-subtle' : 'table-danger-subtle';
                    ?>
                        <tr class="<?= $classeLinha ?>">
                            <td><?= $aluno['nome'] ?></td>
                            <td><?= number_format($aluno['notas'][0], 1) ?></td>
                            <td><?= number_format($aluno['notas'][1], 1) ?></td>
                            <td><?= number_format($aluno['notas'][2], 1) ?></td>
                            <td><strong><?= number_format($media, 1) ?></strong></td>

                            <td class="<?= $classeCor ?>"><?= $situacao ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>