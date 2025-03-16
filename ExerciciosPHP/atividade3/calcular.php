<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 3</title>
</head>
<body>
    <?php
        $salario = $_POST['salario'];
        $filho = $_POST['filho'];
        $aux = 0;

        if ($salario <= 800){
            $salario = $salario * 1.3;
        }
        for ($i = 0; $i < $filho; $i++){
            $aux += 1;
            if ($aux == 1){
                $salario += 90;
                $aux = 0;
            }
        }

        echo "seu salario final eh: ".$salario;
        

    ?>
</body>
</html>