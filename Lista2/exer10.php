<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 10</h1>
    <form action="exer10resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="altura" class="form-label">Informe a altura:</label>
                <input type="number" class="form-control" name="altura" id="altura">
            </div>
            <div class="col">
                <label for="largura" class="form-label">Informe a largura:</label>
                <input type="number" class="form-control" name="largura" id="largura">
            </div>
        </div>
        <div class="row pt-3">
            <div class="col">
                <button type="submit" class="btn btn-outline-info">Enviar </button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>