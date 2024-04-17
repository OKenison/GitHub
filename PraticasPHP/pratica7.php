<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referências entre Variáveis</title>
    <style>
        body{
            color: rosybrown;
            font: 20pt Arial;
        }
    </style>

</head>
<body>
    <?php
        //$a = 3;
        //$b = $a;
        //$b += 5;
        $a = 3;
        $b = &$a;  #referência
        $b += 5;

        echo "$a";
        echo "<br/>$b";
    ?>
</body>
</html>