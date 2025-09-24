

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="get">
        <label>Get method</label><br>
        <label>User Name</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
<br><br>
    <form method="post">
        <label>Post method</label><br>
        <label>User Name </label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>

</body>
</html>


<?php 
    echo "GET method <br>";
    echo  "{$_GET["username"]} <br>";
    echo  "{$_GET["password"]} <br>";

    echo "POST method <br>";
    echo  "{$_POST["username"]} <br>";
    echo  "{$_POST["password"]} <br>";

    echo  $_POST["username"] ." <br>";
?>