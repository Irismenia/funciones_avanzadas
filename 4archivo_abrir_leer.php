<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Abrir archivo PHP - fopen()</h1>
    <p>ejemplo 1</p> 
    <br>
    <?php
    $myfile = fopen("4_php/webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("4_php/webdictionary.txt"));
    fclose($myfile);
    ?>
    <hr>
    <h1>PHP Cerrar archivo - fclose()</h1>
    <br>
    <?php
    $myfile = fopen("4_php/webdictionary.txt", "r");
    // some code to be executed....
    fclose($myfile);
    ?>
    <hr>
    <h1>PHP Leer una sola línea - fgets ()</h1>

        <?php
    $myfile = fopen("4_php/webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
    ?>
    <hr>
    <h1>PHP Verifica el final del archivo - feof ()</h1>
        <?php
    $myfile = fopen("4_php/webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    ?>
    <hr>
    <h1>PHP Leer un solo carácter - fgetc ()</h1>
    <?php
    $myfile = fopen("4_php/webdictionary.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while(!feof($myfile)) {
    echo fgetc($myfile);
    }
    fclose($myfile);
    ?>
    
</body>
</html>