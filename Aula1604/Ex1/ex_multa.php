<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multa de Trânsito</title>
    <style>
        h2{color:orangered;
        }
        span{
            color:orangered;
        }
        h4{
            color:orangered

        }
    </style>
</head>
<body>
    <div>
        <?php
        $vel_car = $_GET["velocidade"];
        $vel_max = 80;
        $vel_ultra = ($vel_car - $vel_max);
        $vel_multa = ($vel_ultra * 5);
        if($vel_car > 80){
            echo "<h4>Você foi multado!</br>";
            echo "Sua velocidade foi de $vel_car Km/h.</br>";
            echo "Você ultrapassou $vel_ultra Km/h.</br>";
            echo "</br>";
            echo "\u{1F4B2}O valor da sua multa é: R$ ".number_format($vel_multa, 2,",",".")."</h4>";
        
        }
        else {
            echo "<h2> \u{1F4B2} Boa viagem siga em frente!</h2>";
        }
                    

            
        ?>   
        <br/>
        <a href="ex_multa.html"><button><span>Voltar</span></button></a>
    </div>
    
</body>
</html>