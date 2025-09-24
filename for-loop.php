<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <lebel>Enter a number to count to:</lebel> 
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>


<?php 

    $counter = $_POST["counter"];

    Echo"Increasing<br>";
    for($i = 1; $i<= $counter;$i++){
        echo $i."<br>";
    }
echo "<br><br> Decreasing <br>";
    for($i = $counter; $i > 0 ;$i--){
        echo $i."<br>";
    }

/*
    for($i =0 ;$i<20;$i+=2){
        echo $i." Hello <br>";
    }
*/
?>