<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP y JSON</title>
</head>
<body>
   <?php
   echo "<h1>PHP - json_encode ()</h1>";
   $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    echo json_encode($age);
    echo "<hr>";
    $cars = array("Volvo", "BMW", "Toyota");

    echo json_encode($cars);
    echo "<hr>";

    echo "<h1>PHP - json_decode ()</h1>";
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj));
    echo "<hr>";

    echo "<h1>PHP JSON ()</h1>";
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj, true));
    echo "<hr>";
    echo "<h1>PHP - Acceso a los valores decodificados</h1>";

    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;
    echo "<h2> 2 Ejemplo</h2>";
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj, true);

    echo $arr["Peter"];
    echo $arr["Ben"];
    echo $arr["Joe"];
    echo "<hr>";

    echo "<h2> PHP - Bucle a través de los valores</h2>";

    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    foreach($obj as $key => $value) {
        echo $key . " => " . $value .     "<br>";
    }
    echo "<h2> 2 Ejemplo</h2>";
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj, true);

    foreach($arr as $key => $value) {
        echo $key . " => " . $value . "<br>";
    }
    echo "<hr>";
   ?>
</body>
</html>