<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="dados1.php">
    <label for="temperatura">Qual temperatura você escolhe:</label>
    <select name="temperatura" id="idtemperatura">
    <option value="" selected>--- Escolha ---</option>
    <option value="Celsius">Celsius</option>
    <option value="Fahrenheit">Fahrenheit</option>
    </select>
    <label for="Valor">Valor:</label>                  
    <input name="Valor" type="number" placeholder="ex: 32°" >
    <button type="submit">Calcular</button>
</form>   

</body>
</html>