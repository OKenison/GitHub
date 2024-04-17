<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação</title>
    <style>
            h1{
                color:red;
            }
            h2{
                color:red;
            }
            body{
                background-color:blanchedalmond ;
            }

    </style>
</head>
<body>
    <?php
    $nome = $_GET["a"];

    echo"<h1>Qual o seu nome? </h1>";
    echo "<h2>$nome</h2>";

    echo" <h2>Olá $nome, é um prazer te conhecer!</h2>";
    ?>
    
</body>
</html>