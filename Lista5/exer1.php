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

        <?php for($i=1;$i<=5;$i++): ?>
            <input type='text' name="nomes[]" placeholder='Nome <?= $i ?>'/>
            <input type='text' name="numeros[]" placeholder='Numero <?= $i ?>'/>
        <?php endfor; ?>

        <button type="submit" class="mt-3">Enviar</button>
    </form>
    
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $nomes = $_POST['nomes'];
                $numeros = $_POST['numeros'];
                $contatos = [];

                
                for($i= 0;$i<= 4;$i++){
                    if (!in_array($nomes[$i], $contatos) && !in_array($numeros[$i], $contatos)) {
                        $contatos[$nomes[$i]] = $numeros[$i];
                    }
                }

                ksort($contatos);
                print_r($contatos);


            } catch (Exception $e){
                echo $e->getMessage();
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>