<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura While</title>
    <style>
      
        label{
            color:rgb(0, 0, 0);
            font:10pt Arial Black;
        }
        span{
            color:rgb(0, 0, 0);;
            font: 9pt Arial Black;
        }
        div{
            font-size: 20px;
        }
        
    </style>

</head>
<body>
    <div>
        <?php
            $c = 1;
            while ($c <= 5) {
                echo "<form action='ex_while.php' method='get'>
                Valor $c: <input type='number' name='v$c' id='v1' min='0' max='100' value='0'></br>";
                $c++;
            }
            
        ?>
    </br>
        <button type="submit">Enviar</button>


        </form>
                 

    </div>
    
</body>
</html>