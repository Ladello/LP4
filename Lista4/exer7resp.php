<?php 
    declare(strict_types = 1);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Exercício 7</h1>
    <main class="container">
        <?php 
            function CalcularDiferenca(DateTime $data1, DateTime $data2): int{
                $diferenca = $data1->diff($data2);
                return $diferenca->days;
            }

            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                try {
                    $primeiraData = (string) $_POST["primeiraData"];
                    $segundaData = (string) $_POST["segundaData"];
                    $data1 = new DateTime($primeiraData);
                    $data2 = new DateTime($segundaData);

                    echo "<p>A diferença de data é " . CalcularDiferenca($data1 , $data2) . " dias</p>";
                } catch (Exception $e) {
                    echo "Erro! " . $e->getMessage();
                }
            }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>