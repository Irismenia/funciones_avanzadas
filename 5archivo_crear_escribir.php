<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $myfile = fopen("5_php/newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
    <hr>
    <h1>Sobreescritura de PHP</h1>
        <?php
    $myfile = fopen("5_php/newfile.txt", "w") or die("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($myfile, $txt);
    $txt = "Minnie Mouse\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
    <hr>
    <h1>PHP Añadir texto</h1>
        <?php
    $myfile = fopen("5_php/newfile.txt", "a") or die("Unable to open file!");
    $txt = "Donald Duck\n";
    fwrite($myfile, $txt);
    $txt = "Goofy Goof\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>  
</body>
</html>
