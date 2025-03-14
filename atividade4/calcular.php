<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 4</title>
</head>
<body>
    <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura*$altura);

        if ($imc < 16){
           echo "magreza grave com imc: ".$imc;
        }
        else if ($imc < 17){
            echo "magreza moderado com imc: ".$imc;
         }
         else if ($imc < 18){
            echo "magreza leve com imc: ".$imc;
         }
        

        
        

    ?>
</body>
</html>