<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 2</title>
</head>
<body>
    <?php
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];

        if (($n1 + $n2 + $n3 + $n4)/4 > 5){
            echo "Aprovado";
        }
        else {
            echo "Reprovado";
        }
        

    ?>
</body>
</html>