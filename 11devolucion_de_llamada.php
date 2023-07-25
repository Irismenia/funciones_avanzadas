<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devolución</title>
</head>
<body>
    <?php
    echo "<h1>Funciones de devolución de llamada</h1>";

    function my_callback($item) {
    return strlen($item);
    }
      
    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
    echo "<hr>";

    echo "<h1>funciones anónimas </h1>";

    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map( function  ($item) { return strlen($item); } ,   $strings);
    print_r($lengths);
    echo "<hr>";

    echo "<h1>Devoluciones de llamada en funciones definidas por el usuario</h1>";

    function exclaim($str) {
    return $str . "! ";
    }
      
    function ask($str) {
        return $str . "? ";
    }
      
    function printFormatted($str,$format) {
    // Calling the $format callback function
    echo $format($str);
    }
      
    // Pass "exclaim" and "ask" as callback functions to printFormatted()
    printFormatted("Hello world", "exclaim");
    printFormatted("Hello world", "ask");
    echo "<hr>";

    ?>
</body>
</html>