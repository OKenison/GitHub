<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET["a"];
    $salario = $_GET["s"];

    echo"Nome do Funcionário: $nome.";
    echo"<br/>Salário: ".number_format($salario, 2,",","."); 
    echo"<br/>..............................";
    echo"<br/>O(a) Fubcionário(a): $nome tem o Salário de: R$ ".number_format($salario, 2,",",'.')." em 10/05/2024.";
    
    ?>
    
</body>
</html>