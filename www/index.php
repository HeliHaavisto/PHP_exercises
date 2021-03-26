<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exmple</title>
</head>
<body>
    <?php
    $value = 10;
    $dec = 12.2;
    echo $value;
    echo "<br>";
    echo $dec;
    echo "<br>";
    echo gettype($dec);
    $sentence ="Good morning";
    $someone = "Heli";
    echo "<h1>This is Heli</h1>";
    echo $sentence;
    echo "<br>";
    echo $sentence . " " . $someone;
    ?>
</body>
</html>