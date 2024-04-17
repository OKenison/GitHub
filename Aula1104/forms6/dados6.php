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
          $num = $_GET["n1"];
          $ant = $num - 1;
          $suc = $num + 1;


          echo "<h2>O antecessor de $num è: $ant </h2>";
          echo "<br/><h2>O sucessor $num é: $suc.</h2>";    
        
        ?>  
        </br>
        <a href="index.html">Voltar</a>

    </div>
    
</body>
</html>