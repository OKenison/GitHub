<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores do Usuário</title>
    <style>
        h2{color: red;
            font: 16pt Arial;
        }

    </style>
</head>
<body>
    <?php
        $v1 = $_GET["a"];
        $v2 = $_GET["b"];

        echo "<h2>Os valores recebidos são: $v1 e $v2</h2>";
        
        $soma = $v1 + $v2;
        $sub = $v1 - $v2;
        $mult = $v1 * $v2;
        $div = $v1 / $v2;

        echo"<br/> O resultado da Soma é: $soma.";
        echo"<br/> O resultado da Subtração é: $sub.";
        echo"<br/> O resultado da Multiplicação é: $mult.";
        echo"<br/> O resultado da Divisão é: $div.";

        //Funções Basicas em PHP
        //abs() = valor absoluto
        echo "<br/> O valor absoluto de $v1 é: ".abs($v1);
        //pow() = potenciação
        echo "<br/> O valor de $v1 <sup> $v2 </sup> é: ".pow($v1, $v2);
        //sqrt() = Raiz Quadrada
        echo "<br/> A raiz quadrada de $v1 é: ".sqrt($v1);
        //round()
        echo "<br/> O valor arredondado de $v1 é: ".round($v1);
        //Arredonda para cima
        echo "<br/> O valor arredondado de $v1 é: ".ceil($v1);
        //Arredonda para baixo
        echo "<br/> O valor arredondado de $v1 é: ".floor($v1);
        //NUMBER FORMAT = Formatação de moedas
        echo"<br/> O valor de $v1 em moeda É R$: ".NUMBER_FORMAT($v1, 2,",",".");    
    
    
    ?>
</body>
</html>

<?php

