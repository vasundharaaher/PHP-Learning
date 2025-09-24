<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>


<?php 

    // While loop = do some code infinitely while some 
    // condition remains true
    /*
    $counter = 0;

    while($counter <= 10){
        $counter++;
        echo $counter."<br>";
    }
    */

    $seconds = 0;
    $running =true;
    while ($running) {
        if (isset($_POST["stop"])) {
            $running = false;   // stop loop if button pressed
        } else {
            $seconds++;
            echo $seconds . "<br>";
        }
    }

?>