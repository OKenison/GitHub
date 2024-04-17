<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento de Salário</title>
    <style>
        body{
            color: red;
            font: 20pt Arial;
        }
    </style>

</head>
<body>
    <?php
  
    #aumento de salário 10%
  $sal = 4500;
  //$sal = $sal + ($sal * 10 / 100);
  $sal += ($sal * 10 / 100);
  echo "O novo salário será: ".number_format($sal, 2, ",",".");
  //$sala = $sal - ($sal * 10 / 100);
  $sal -= ($sal * 10 / 100);
  echo "<br/>O desconto do salário foi de: ".number_format($sal, 2, ",",".");
    ?>
</body>
</html>