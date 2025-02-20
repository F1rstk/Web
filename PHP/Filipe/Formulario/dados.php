<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$peso=$_GET["peso"];
$altura=$_GET["altura"];
$nome=$_GET["nome"];



$imc = $peso/($altura*$altura);

echo "Seu nome é: {$nome} <br> sua altura é: {$altura} <br> seu peso é:  {$peso}<br> seu IMC é: " .round($imc, 2);

?>

</body>
</html>