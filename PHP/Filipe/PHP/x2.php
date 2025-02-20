<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<?php
$nome = "Filipe";
$nome1 = "Marcos";
$idade = 19;
$idade1 = 33;
$salario = 0;
$salario1 = 2000;

$fichacompleta = $nome." - ".$idade." - ".$salario . "<br>";
echo $fichacompleta;

$fichacompleta1=" $nome1 - ";
$fichacompleta1.=" $idade1 - ";
$fichacompleta1.=" $salario1 -";
echo $fichacompleta1;

echo "<br>
meu nome é {$nome} minha idade: {$idade} - meu salario: {$salario} ";


?>


    
</body>
</html>