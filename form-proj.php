<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST">
        <label>----------Calculator--------</label><br>
        <label>User Name</label><br>
        <input type="number" name="quantity"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php

    $item = "Pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;
    echo "you have ordered {$quantity} X {$item}<br>";
    echo "Your total is:\${$total}";

?>