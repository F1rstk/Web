<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="dados.php">
     <label for="nome">Nome:</label>
    <input name="nome" type="text" placeholder="ex: Filipe">
    <label for="peso">Peso:</label>                  
    <input name="peso" type="number" placeholder="ex: 70" >
    <label for="altura">Altura:</label>                
    <input name="altura" type="number" placeholder="ex: 1.70" step="any">

    <button type="submit">Calcular</button>
    </form>

    
</body>
</html>