<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <!--3. Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem
    crescente em relação aos seus valores. Caso os valores sejam iguais,
    informar o usuário e imprimir o valor em tela apenas uma vez.
    Exemplo, para A=5, B=4 você deve imprimir na tela: "4 5" .
    para A=5, B=5 você deve imprimir na tela: “Números iguais: 5” -->

    <h1>Exercício 3</h1>
    <form action="exer3resp.php" method="post">
        <?php
        for ($i = 1; $i <= 2; $i++) { ?>
            <input type='number' name='valor<?= $i ?>'>
        <?php    }  ?>
        <button type="submit">Enviar</button>
    </form>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>