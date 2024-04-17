<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <style>
        h2{color:brown;
        }
    </style>
</head>
<body>
    <div>
        <?php
             $valor1 = $_GET["v"];
             $valor2 = $_GET["v1"];
             $r = ($valor1 + $valor2);
 
 
             echo "<h2> A soma entre $valor1 e $valor2 é igual a: $r</h2>";     
                           
        ?>   
        <br/>
        <a href="index.html"><button>Voltar</button></a>
    </div>
    
</body>
</html>
