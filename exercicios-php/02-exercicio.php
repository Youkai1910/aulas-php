<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-02</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: black;
            color: white;
        }
        article {
            padding: 4px;
            width: 40px;
            border: solid 1px;
        }
        .container{
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <h1>Exercício de Array Associativo e Objeto Genérico</h1>
    <hr>
    <?php
    $usuario1 = new stdClass;
    $usuario1->nome = "Maria";
    $usuario1->email = "maria@maria.com";
    $usuario1->senha = "123abc";
    $usuario1->idade = 40;
    $usuario1->sexo = "Feminino";
    $usuario1->cidade = "São Paulo";
    ?>
    <?php $usuario2 = [
        "nome" => "Pedro",
        "email" => "pedro@pedro.com",
        "senha" => "456abc",
        "idade" => 40,
        "sexo" => "Masculino"
    ]; ?>
<!--Dados do usuario1 (array associativo):
Veja o uso dos colchetes e das chaves associativas-->
<div class="container">
    <article>
        <h2>Usuario1</h2>
        <p>Nome: <?= $usuario1->nome ?></p>
        <p>E-mail: <?= $usuario1->email ?></p>
        <p>Idade: <?= $usuario1->idade ?></p>
        <p>Sexo: <?= $usuario1->sexo  ?></p>
    </article>
<!--Dados do usuario2 (objeto):
Veja o uso da setinha e das propriedades-->
    <article>
        <h2>Usuario2</h2>
        <p>Nome: <?= $usuario2["nome"] ?></p>
        <p>E-mail: <?= $usuario2["email"] ?></p>
        <p>Idade: <?= $usuario2["idade"] ?></p>
        <p>Sexo: <?= $usuario2["sexo"] ?></p>
    </article>
</div>
</body>

</html>