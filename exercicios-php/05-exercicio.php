<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios-05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

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

        function calcularMedia(array $notas): float
        {
            $soma = 0;
            $quantidade = 0;

            foreach ($notas as $nota) {
                $soma = $soma + $nota;
                $quantidade = $quantidade + 1;
            }

            return $soma / $quantidade;
        }

        function verificarSituacao(float $media): string
        {
            if ($media >= 7) {
                return 'Aprovado';
            } elseif ($media >= 5) {
                return 'Recuperação';
            } else {
                return 'Reprovado';
            }
        }

        $alunos = [
            ["nome" => "Ana Silva", "notas" => [8.5, 7.0, 9.0]],
            ["nome" => "Bruno Costa", "notas" => [5.0, 6.5, 4.0]],
            ["nome" => "Carlos Souza", "notas" => [7.0, 5.5, 7.0]],
            ["nome" => "Daniel Lima", "notas" => [5.0, 4.5, 5.0]],
            ["nome" => "Eduardo Alves", "notas" => [1.0, 5.5, 7.0]]
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
                        if ($situacao === 'Aprovado') {
                            $classeCor = 'text-success fw-bold';
                        } elseif ($situacao === 'Recuperação') {
                            $classeCor = 'text-warning fw-bold';
                        } else {
                            $classeCor = 'text-danger fw-bold';
                        }
                    ?>
                        <tr>
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