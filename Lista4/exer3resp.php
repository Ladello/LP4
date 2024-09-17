<?php 
    declare(strict_types = 1);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Exercício 3</h1>
    <main class="container">
        <?php 
            function verificarPresenca(string $palavra, string $palavra2):string{
                return str_contains($palavra, $palavra2) ? 'está' : 'não está';
            }

            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                try {
                    $palavra = (string) $_POST["palavra"];
                    $palavra2 = (string) $_POST["palavra2"];
                    echo "<p>A palavra $palavra2 " . verificarPresenca($palavra, $palavra2) . " presente na palavra '$palavra'</p>";
                } catch (Exception $e) {
                    echo "Erro! " . $e->getMessage();
                }
            }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>