<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Switch</title>
    <style>
        h2{color:brown;
        }
        span{
            color:brown;
        }
        h4{
            color:brown;

        }
    </style>
</head>
<body>
    <div>
        <?php
      $n = $_GET["num"];
      $o = $_GET["oper"];
      switch ($o) {
        case '1':
            $o = ($n * 2);
            break;
        
        case '2':
            $o = pow($n, 3);
            break;
        case '3':
            $o = sqrt($n);
        
      }
        echo "<h4>O resultado da solicitação é: $o</h4>";    
        ?>   
        <br/>
        <a href="ex_switch.html"><button><span>Voltar</span></button></a>
    </div>
    
</body>
</html>