<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="widthdevice-width, initial-scale=1.0">
    <title>Calculadora de Precio de Escritorio</title>
</head>
<body>
    <h2>Calculadora de Precio de Escritorio</h2>
    <form action="calcularPrecio.php" method="get">
        Largo del escritorio (cm): <input type="number" name="largo" required><br>
        Ancho del escritorio (cm): <input type="number" name="ancho" required><br>
        Tipo de madera:
        <select name="madera">
            <option value="ninguna">Ninguna</option>
            <option value="caoba">Caoba</option>
            <option value="roble">Roble</option>
        </select><br>
        Número de cajones: <input type="number" name="cajones" required><br>
        <input type="submit" value="Calcular Precio">
    </form>
</body>
</html>