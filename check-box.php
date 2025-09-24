<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <form method="post">
        <input type="checkbox" name="Pizza" value="Pizza"> Pizza<br>
        <input type="checkbox" name="Hamburger" value="Hamburger"> Hamburger<br>
        <input type="checkbox" name="Hotdog" value="Hotdog"> Hotdog<br>
        <input type="checkbox" name="Taco" value="Taco"> Taco<br>
        <input type="submit" name="submit">
    </form>
-->
<form method="post">
        <input type="checkbox" name="foods[]" value="Pizza"> Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger"> Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog"> Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco"> Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

if(isset($_POST["submit"])){
    $foods = $_POST["foods"];
    foreach($foods as $food){
        echo $food . "<br>";
    }
}


/*
    if(isset($_POST["submit"])){

        // isset
        if(isset($_POST["Pizza"])){
            echo "you like pizza..!!<br>";
        }
        if(isset($_POST["Hamburger"])){
            echo "you like Hamburger..!!<br>";
        }
        if(isset($_POST["Hotdog"])){
            echo "you like Hotdog..!!<br>";
        }
        if(isset($_POST["Taco"])){
            echo "you like Taco..!!<br>";
        }

        // Empty
        if(empty($_POST["Pizza"])){
            echo "you DON'T like pizza..!!<br>";
        }
        if(empty($_POST["Hamburger"])){
            echo "you DON'T like Hamburger..!!<br>";
        }
        if(empty($_POST["Hotdog"])){
            echo "you DON'T like Hotdog..!!<br>";
        }
        if(empty($_POST["Taco"])){
            echo "you DON'T like Taco..!!<br>";
        }
    }
*/
?>