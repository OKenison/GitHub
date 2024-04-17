<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
    <style>
        h2{color:brown;
        }
    </style>
</head>
<body>
    <div>
    <?php
            $val_prod = $_GET["p1"];
            $val_descontado = ($val_prod * 5/100);
            $val_desc = $val_prod - ($val_prod * 5/100);

            echo "<h2>O valor do seu produto: R$  ".number_format($val_prod, 2, ",", ".")."</h2>";
            echo "<h2> O volor de desconto de 5% é: R$ ".number_format($val_descontado, 2, ",", ".")."</h2>";
            echo "<h2><br/>Você pagará o valor de: R$  ".number_format($val_desc, 2, ",",".")."</h2>";    
        
        ?>  
        <br/>
        <a href="index.html"><button>Voltar</button></a>
    </div>
    
</body>
</html>
