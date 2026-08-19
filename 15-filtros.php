<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
     <h1>Filtros para validação e sanitização</h1>
     <hr>
     <p>Filtros são recursos de análise e limpesa de dados aplicados através de funções especiais, normalmente as funções <code>filter_var()</code>e <code>filter_input()</code> e também com o uso de <b>constantes</b> de 
    validação/sanitização.</p>

    <h2>validação</h2>
    <h3>FILTER_VALIDATE_EMAIL</h3>
    <?php 
    $email = "email@provedor.com";
    $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
    ?>
    <pre><?php var_dump($emailValido) ?></pre>
    <?php if($emailValido):?>
        <p class="text-success">E-mail correto!</p>
    <?php else: ?>
        <p class="text-danger">E-mail incorreto!</p>
    <?php endif; ?>

    <h3>FILTER_VALIDATE_URL</h3>
    <?php 
    $redeSocial = "http://localhost/15-filtros.php";
    $redeSocialValida = filter_var($redeSocial, FILTER_VALIDATE_URL);
    ?>
    <pre><?php var_dump($redeSocialValida) ?></pre>

    <?php if($redeSocialValida): ?>
        <a href="<?= $redeSocial ?>" class="btn btn-info">Me siga no LinkedIn</a>
    <?php endif; ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>