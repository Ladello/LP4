<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <!-- 7. Crie um programa que receba o valor de duas datas no formato dd/mm/YYYY e que apresente
    a diferença de dias entre as duas datas. -->

    <h1>Exercício 7</h1>
    <form action="exer7resp.php" method="post">
    <div class="row">
            <div class="col">
                <label for="primeiraData" class="form-label">Insira a primeira data:</label>
                <input type="date" class="form-control" name="primeiraData" id="primeiraData">
            </div>
            <div class="col">
                <label for="segundaData" class="form-label">Insira a segunda data:</label>
                <input type="date" class="form-control" name="segundaData" id="segundaData">
            </div>
        </div>
        <button type="submit" class="mt-3">Enviar</button>
    </form>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>