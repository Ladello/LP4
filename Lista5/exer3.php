<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
        <form action="" method="POST">

        <?php for($i = 1; $i <= 5; $i++): ?>
            <div class="row">
                <div class="col-2 pb-3">
                    <label>Código <?= $i ?>:</label>
                    <input type="number" name="codigos[]" placeholder="Código">
                </div>
                <div class="col-2 pb-3">
                    <label>Nome:</label>
                    <input type="texto" name="nomes[]" placeholder="Nome">
                </div>
                <div class="col-2 pb-3">
                    <label>Preço:</label>
                    <input type="number" name="precos[]" placeholder="Preço">
                </div>
            </div>
        <?php endfor; ?>


        <button type="submit" class="mt-3">Enviar</button>
    </form>
    
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $codigos = $_POST['codigos'];
                $nomes = $_POST['nomes'];
                $precos = $_POST['precos'];
                $produtos = [];

                for ($i = 0; $i < 5; $i++) {
                    if ($precos[$i] > 100) {
                        $precos[$i] -= $precos[$i] * 10 / 100;
                    }
                    $produtos[$codigos[$i]] = ['nome' => $nomes[$i],'preco' => $precos[$i]];
                }

                usort($produtos, function($a, $b) {return strcmp($a['nome'], $b['nome']);});
                print_r($produtos);



            } catch (Exception $e){
                echo $e->getMessage();
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>