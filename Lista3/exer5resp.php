<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Resposta Exercício 5</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        try {
            $valor1 = (int) $_POST["valor1"];

            switch ($valor1) {
                case 1:
                    echo "<p> Janeiro </P>";
                    break;
                case 2:
                    echo "<p> Fevereiro </P>";
                    break;
                case 3:
                    echo "<p> Março </P>";
                    break;
                case 4:
                    echo "<p> Abril </P>";
                    break;
                case 5:
                    echo "<p> Maio </P>";
                    break;
                case 6:
                    echo "<p> Junho </P>";
                    break;
                case 7:
                    echo "<p> Julho </P>";
                    break;
                case 8:
                    echo "<p> Agosto </P>";
                    break;
                case 9:
                    echo "<p> Setembro </P>";
                    break;
                case 10:
                    echo "<p> Outubro </P>";
                    break;
                case 11:
                    echo "<p> Novembro </P>";
                    break;
                case 12:
                    echo "<p> Dezembro </P>";
                    break;
            }
        } catch (Exception $e) {
            echo "Erro! " . $e->getMessage();
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>