<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercicio 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
  <!-- 1. Escreva um programa que leia 7 números diferentes, imprima o menor
  valor e imprima a posição do menor valor na sequência de entrada -->

  <h1>Exercício 1</h1>
  <form action="exer1resp.php" method="post">
    <?php
    for ($i = 1; $i <= 7; $i++) { ?>
      <input type='number' name='valor<?= $i ?>'>
    <?php    }  ?>
    <button type="submit">Enviar</button>
  </form>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>