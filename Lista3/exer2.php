<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <!-- 2. Escreva um programa para calcular a soma dos dois valores de entrada. Se
    os dois valores forem iguais, retorne o triplo da soma. -->
    <h1>Exercício 3</h1>
    <form action="exer2resp.php" method="post">
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