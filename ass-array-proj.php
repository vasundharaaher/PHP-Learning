<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter contry to see it's capital</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php 

    $capitals = array("USA"=> "Washington D. C.",
                        "Japan"=> "Kyoto",
                        "South Korea"=> "Seoul" ,
                        "India"=> "New Delhi");

    $capital = $capitals[$_POST["country"]];

    echo "The capital is {$capital}";

?>