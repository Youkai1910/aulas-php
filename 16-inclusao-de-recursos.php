<?php include "16-recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Inclusão de recursos</h1>
        <hr>
        <p>Utilizamos comandos <code>include</code> e/ou <code>require</code>para importar arquivos com recursos externos com externos de qualquer natureza, permitindo natureza, permitindo assim a reutilização de código.</p>
        <h2>Exemplos de uso/acesso</h2>
        <p>Estamos estudando na <?= ESCOLA ?> fazendo o curso <?= $curso ?>.</p>
        <p>Para fazer este curso o aluno deve ser maior de idade.</p>
        <p>Como você <?= ALUNO ?> tem 20 anos, você é <?= verificarIdade(20) ?></p>

        <h2>Exemplo de carregamento de conteudo parcial/fragmento</h2>
          <section>
            <h3>Título qualquer</h3>
            <?php include "16-textos.php"; ?>
          </section>
        



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>