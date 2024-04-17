<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual x Indêntico</title>
    <style>
        body{
            color: rosybrown;
            font: 20pt Arial black;
        }
    </style>

</head>
<body>
    <?php
        $a = 3;
        $b = "3";
        $r = $a == $b? "Sim": "Não";
        echo "$r";
        $r = $a === $b? "Sim": "Não";
        echo "<br/>$r";
       ?>
</body>
</html>