<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais II</title>
    <style>
        body{
            color: rosybrown;
            font: 20pt Arial black;
        }
    </style>

</head>
<body>
    <?php
       $n1 = $_GET["a"];
       $n2 = $_GET["b"];
       $tipo = $_GET["op"];
       echo "Os valores recebidos foram: $n1 e $n2.";
       echo"<br?>";
       $r = ($tipo == "s")?$n1 + $n2 : $n1*$n2; #operador unário

       echo "<br/>O resultado será: $r";
       ?>
</body>
</html>