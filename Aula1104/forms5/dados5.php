<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somatoria</title>
    <style>
        h2{color:brown;
        }
    </style>
</head>
<body>
    <div>
        <?php
          $nota1 = $_GET["n1"];
          $nota2 = $_GET["n2"];
          $media = ($nota1 + $nota2)/2;


          echo "<h2> A média entre $nota1 e $nota2 é igual a: $media.</h2>";    
        
        ?>  
        </br>
        <a href="index.html">Voltar</a>

    </div>
    
</body>
</html>