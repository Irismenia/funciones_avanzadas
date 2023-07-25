<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <h1>obtener una cita</h1>

        <?php
    echo "hoy es  " . date("Y/m/d") . "<br>";
    echo "hoy es  " . date("Y.m.d") . "<br>";
    echo "hoy es  " . date("Y-m-d") . "<br>";
    echo "hoy es  " . date("l");
    ?>
    <hr>
    <h1>Sugerencia de PHP: año de copyright automático</h1>
        &copy; 2010-<?php echo date("Y");?>
    <hr>
    <h1>obtener un tiempo</h1>
    
        <?php
    echo "la hora es  " . date("h:i:sa");
    ?>
    <hr>
    <h1>Obtenga su zona horaria</h1>

        <?php
    date_default_timezone_set("America/New_York");
    echo "la hora es " . date("h:i:sa");
    ?>
    <hr>
    <h1>Crear una fecha con mktime()</h1>

        <?php
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "La fecha de creación es " . date("Y-m-d h:i:sa", $d);
    ?>
    <hr>
    <h1>Crear una fecha a partir de una cadena con strtotime()</h1>
        <?php
    $d=strtotime("10:30pm April 15 2014");
    echo "La fecha de creación es " . date("Y-m-d h:i:sa", $d);
    ?>
    <hr>
    <p>PHP es bastante inteligente para convertir una cadena en una fecha, por lo que puede ingresar varios valores:</p>

        <?php
    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    ?>
    <hr>
    <h1>Más ejemplos de fechas</h1>
    <br>
    <p>El siguiente ejemplo muestra las fechas de los próximos seis sábados: </p>
    <br>
        <?php
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
    }
    ?>
    <hr>
    <p>El siguiente ejemplo muestra el número de días hasta el 4 de julio:</p>
    <br>
        <?php
    $d1=strtotime("Julio 04");
    $d2=ceil(($d1-time())/60/60/24);
    echo "Hay " . $d2 ." días hasta el 4 de julio.";
    ?>


</body>
</html>