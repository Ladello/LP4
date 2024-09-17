<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <!-- 4. Crie um programa em PHP que leia três valores: dia, mês e ano. Verifique se a data informada
    é válida e apresente a data em formato dd/mm/YYYY. -->

    <h1>Exercício 4</h1>
    <form action="exer4resp.php" method="post">
    <div class="row">
            <div class="col">
                <label for="dia" class="form-label">Digite uma dia:</label>
                <input type="number" class="form-control" name="dia" id="dia">
            </div>
            <div class="col">
                <label for="mes" class="form-label">Digite um mês:</label>
                <input type="mumber" class="form-control" name="mes" id="mes">
            </div>
            <div class="col">
                <label for="ano" class="form-label">Digite um ano:</label>
                <input type="number" class="form-control" name="ano" id="ano">
            </div>
        </div>
        <button type="submit" class="mt-3">Enviar</button>
    </form>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>