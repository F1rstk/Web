<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function calcular_area($a, $b, $c) {
    $s = ($a + $b + $c) / 2;
    return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
}

function tipo_triangulo($a, $b, $c) {
    if ($a == $b && $b == $c) {
        return "Equilátero";
    } elseif ($a == $b || $a == $c || $b == $c) {
        return "Isósceles";
    } else {
        return "Escaleno";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = floatval($_POST["lado1"]);
    $lado2 = floatval($_POST["lado2"]);
    $lado3 = floatval($_POST["lado3"]);

    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        $area = calcular_area($lado1, $lado2, $lado3);
        $tipo = tipo_triangulo($lado1, $lado2, $lado3);

        echo "<h3>Resultado:</h3>";
        echo "Área: " . number_format($area, 2) . " unidades²<br>";
        echo "Tipo: " . $tipo;
    } else {
        echo "<p style='color: red;'>Os valores informados não formam um triângulo válido.</p>";
    }
}
?>

</body>
</html>