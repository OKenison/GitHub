<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha o Dia</title>
    <style>
        h2{color:brown;
        }
        span{
            color:brown;
        }
        
    </style>
</head>
<body>
    <div>
        <?php
            $dia = $_GET["dias"];
            switch ($dia) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    $r = "Hoje tem aula \u{1F60F}";
                    break;

                case 6:
                case 7:
                    $r = "Nâo tem aula \u{1F917}";
                    break;
            }
            echo "$r";
        ?>   
        <br/>
        <a href="ex_switch2.html"><button><span>Voltar</span></button></a>
    </div>
    
</body>
</html>