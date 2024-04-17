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
        $nome = $_GET["n"];
           
        echo "<h2>Nome: $nome.</h2>";

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2)/2;


        /*0echo "<h2> A média entre $nota1 e $nota2 é igual a: $media.</h2>";*/ 
        
        if ($media >= 7 || $media = 10) {
            $v = "Você foi aprovado com a nota $media.";               
         }
         elseif ($media <=5 || $media = 6.99 ) {
                 $v= "Você está de recuperação";

             }
             else {
                 $v = "Você está reprovado";
             }
         echo "<h2>A sua média foi: $media.</h2>";
         echo "<h2>$v</h2>";
        
        
        ?>  
        </br> 
        <br/>
        <a href="index.html"><button>Voltar</button></a>
    </div>
    
</body>
</html>
