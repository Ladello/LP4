<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta Exercício 1</h1>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            try{
                $menorValor = (int) $_POST['valor1'];
                $posicao = (int) 0;
                for($i= 1;$i<8;$i++){
                    $valor[$i] = (int) $_POST["valor$i"] ?? 0;
                    if ($valor[$i] < $menorValor){
                        $menorValor = $valor[$i];
                        $posicao = $i;
                    }
                }
                echo "<p>Menor valor: $menorValor </p>";
                echo "<p>Posição: $posicao </p>";
            } 
            catch(Exception $e){
                echo "Erro! " .$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>