<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$tem=$_GET["temperatura"];
$valor=$_GET["Valor"];



if($tem == "Celsius"){
$Celsius = ($valor-32)*5/9;

echo "Você escolheu {$tem} <br> o calculo é de {$Celsius}";
}


if($tem == "Fahrenheit"){

    $fahrenheit = ($valor*9/5)+32;
    echo "Você escolheu {$tem} <br> o calculo é de {$fahrenheit}";    
}



?>


</body>
</html>