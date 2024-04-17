<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vareavél de Variáveis</title>
    <style>
        body{
            color: rosybrown;
            font: 20pt Arial;
        }
    </style>

</head>
<body>
    <?php
        /*$nome = "Cetam";
        $$nome = "IBC";
        echo "$nome";
        echo "<br/>$Cetam";
*/
        $a = "c";
        $$a = " b";
        echo "$a";
        echo "$c";


       ?>
</body>
</html>