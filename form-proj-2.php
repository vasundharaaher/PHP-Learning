<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST">
        <label>----------Some Spetial opretions in php--------</label><br>
        <label>X</label><br>
        <input type="text" name="x"><br>
        <label>Y</label><br>
        <input type="text" name="y"><br>
        <label>Z</label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;


    // For One Variable
    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = sqrt($x);

    // For Two Variable
    //$total = pow($x , $y);
    
    // For three Variable
    //$total = max($x , $y , $z);
    //$total = min($x , $y , $z);

    //$total = pi();
    //$total = rand();
    //$total = rand(1 , 100);
    
    echo $total;


?>