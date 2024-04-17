<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura DoWhile</title>
    <style>
        h3{
            
            font-size: 20pt;
           
        }
    </style>
</head>
<body>

<div>
    <?php
        $cont = 100;
        do {
            echo "$cont ";
            $cont+=100;
        } while ($cont <=1000);
          
    
    ?>
    <br/>
        <a href="ex_dowhilefront.php"><button><span>Voltar</span></button></a>
    





</div>
    
</body>
</html>