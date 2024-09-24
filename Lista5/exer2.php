<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
        <form action="" method="POST">

        <?php for($i = 1; $i <= 5; $i++): ?>
            <div class="row">
                <div class="col-2 pb-3">
                    <label>Aluno <?= $i ?>:</label>
                    <input type="text" name="nomes[]" placeholder="Nome">
                </div>
                <div class="col-2 pb-3">
                    <label>Nota 1:</label>
                    <input type="number" name="nota1[]" placeholder="Nota 1">
                </div>
                <div class="col-2 pb-3">
                    <label>Nota 2:</label>
                    <input type="number" name="nota2[]" placeholder="Nota 2">
                </div>
                <div class="col-2 pb-3">
                    <label>Nota 3:</label>
                    <input type="number" name="nota3[]" placeholder="Nota 3">
                </div>
            </div>
        <?php endfor; ?>


        <button type="submit" class="mt-3">Enviar</button>
    </form>
    
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $nomes = $_POST['nomes'];
                $notas1 = $_POST['nota1'];
                $notas2 = $_POST['nota2'];
                $notas3 = $_POST['nota3'];
                $alunos = [];
            
                for ($i = 0; $i <= 4; $i++) {
                    $media = ($notas1[$i] + $notas2[$i] + $notas3[$i]) / 3;
                    $alunos[$nomes[$i]] = $media;
                }
            
                arsort($alunos);
                print_r($alunos);


            } catch (Exception $e){
                echo $e->getMessage();
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>