<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
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
           
            echo "<h2>Olá Sr. $nome, é um prezer te conhecer!";
        ?>   
        <br/>
        <a href="index.html"><button>Voltar</button></a>
    </div>
    
</body>
</html>