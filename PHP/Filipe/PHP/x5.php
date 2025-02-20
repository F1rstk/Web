<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    
<?php

$peso = 80;
$altura = 1.80;


$imc = $peso/($altura*$altura);

echo " a Sua Altura é de {$altura} <br> 
O seu peso é de {$peso} <br>
o seu IMC é de ".round($imc,2);


?>

</body>
</html>