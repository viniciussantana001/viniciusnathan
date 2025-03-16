<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 1</title>
</head>
<body>
    <?php
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        if ($n1 > $n2){
            echo "o primeiro numero eh o maior";
        }
        else {
            echo "o segundo numero eh o maior";
        }
        

    ?>
</body>
</html>