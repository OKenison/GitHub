<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
    <style>
        h2{color:brown;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $nome = $_GET["n"];
            $sal = $_GET["sal"];
            
            echo "<h2>Nome do Funcionario:  $nome.</h2>";
            echo "<h2>Salário: R$".number_format($sal, 2, ",",".")."</h2>";
            echo "<h2>O(a) Funcioário(a) $nome, tem um salário de: R$".number_format($sal, 2, ",",".")." em 12/04/2024</h2>";
                           
        ?>   
        <br/>
        <a href="index.html"><button>Voltar</button></a>
    </div>
    
</body>
</html>