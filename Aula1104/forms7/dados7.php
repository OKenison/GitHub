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
            $sal = $_GET["s1"];
            $salau = $sal + ($sal * 15/100);

            echo "<h2>Atual Salário: ".number_format($sal, 2, ",", ".")."</h2>";
            echo "<h2><br/> Novo salário com 15% de aumento: ".number_format($salau, 2, ",",".")."</h2>";    
        
        ?>  
        </br>
        <a href="index.html">Voltar</a>

    </div>
    
</body>
</html>