<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura While</title>
    <style>
        h3{
            
            font-size: 20pt;
           
        }
    </style>
</head>
<body>

<div>
    <?php
        $c = 1;
        while ($c <= 5) {
            $v = "num".$c;  #criadora ds variaveis que irão receber os valores
            $user = "v".$c;  #ira receber os valores digitados pelo usuario
            $$v = $_GET["$user"]; #Variável das variáveis sendo gerada p receber os valores.
            $c++;

        }        
        echo "<h3>$num1, $num2, $num4, $num5, $num5.<h3>";
    
    
    ?>
    <br/>
        <a href="ex_whilefront.php"><button><span>Voltar</span></button></a>





</div>
    
</body>
</html>