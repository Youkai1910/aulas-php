<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- crie um formulário para cadastro (simulação) de produtos com os campos: 
Nome do produto (input text) 
Fabricante (select de options com pelo menos 4 nomes de fabricantes)  
Preço (input number com valor mínimo de 100 e máximo de 10000, além de suporte à 2 casas decimais para os centavos) 
Quantidade (input number, mínimo 0 e máximo de 1000, sem casas decimais) 
Em um novo arquivo chamado exercicio07-processamento.php, faça a programação de processamento do formulário considerando o envio/recebimento via POST, filtros de sanitização e validação de todos os campos como obrigatórios. 
Faça também a exibição dos dados no HTML usando as tags de sua preferência. 
🔥 Desafio: 
Calcule o valor total fazendo a multiplicação do preço pela quantidade 
Mostre o valor total calculado. -->

    <div class="container">
        h1>Confirmação de Cadastro</h1>
        <hr>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_SPECIAL_CHARS);
            $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
        
            if (empty($nome) || empty($fabricante) || $preco === "" || $quantidade === "") { ?>
 
                <p style="color: red;">Erro: Todos os campos são obrigatórios!</p>
                <p><a href="javascript:history.back()">Voltar e preencher</a></p>
            
            <?php } else {
                $preco = (float)$preco;
                $quantidade = (int)$quantidade;
                $valorTotal = $preco * $quantidade; 
            ?>
                <h2>Produto Cadastrado com Sucesso!</h2>
                <p><strong>Nome do Produto:</strong> <?=$nome?></p>
                <p><strong>Fabricante:</strong> <?=$fabricante?></p>
                <p><strong>Preço Unitário:</strong> R$ <?=number_format($preco, 2, ',', '.')?></p>
                <p><strong>Quantidade:</strong> <?=$quantidade?></p>
                <hr>
                <h3><strong>Valor Total:</strong> R$ <?=number_format($valorTotal, 2, ',', '.')?></h3>
                
                <p><a href="07-exercicio.html">Cadastrar outro produto</a></p>
                
            <?php }
        } else { ?>

            <p style="color: orange;">Por favor, envie o formulário primeiro.</p>
            <p><a href="07-exercicio.html">Ir para o formulário</a></p>

        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>