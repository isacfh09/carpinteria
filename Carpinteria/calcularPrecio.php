<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widthdevice-width, initial-scale=1.0">
    <title>Resultado del Precio</title>
</head>
<body>
    <h2>Resultado del Precio</h2>

    <?php
    $largo = $_GET['largo'];
    $ancho = $_GET['ancho'];
    $madera = $_GET['madera'];
    $cajones = $_GET['cajones'];
    $precioBase = 400;
    $preciFinal = $precioBase;
    $superficie = $largo * $ancho;

    if ($superficie > 120) {
        $precioFinal += 100;
    }

    if ($madera == "caoba") {
        $precioFinal += 150;
    } elseif ($madera == "roble") {
        $precioFinal += 125;
    }

    $precioFinal += $cajones * 40;
    echo "Largo del escritorio: $largo cm<br>";
    echo "Ancho del escritorio: $ancho cm<br>";
    echo "Tipo de madera: $madera<br>";
    echo "Número de cajones: $cajones<br>";
    echo "Precio final: $precio_final";


   $cone = mysqli_connect('.localhost','root','','carpinteria');
        if (!conn) {
             die('problema al conectar', mysqli_errno());
         } 
    ?>
</body>
</html>