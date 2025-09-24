<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
<!--
        <leble>Username : </leble>
        <input type="text" name="username"><br>
        <label>Password : </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In">
-->
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">American Express<br>
        <input type="radio" name="credit_card" value="SBI">SBI<br>
        <input type="submit" name="confirm">
    </form>
    
</body>
</html>
<?php 

    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }
        if($credit_card == "Visa"){
            echo "You selected Visa";
        }
        elseif($credit_card == "Mastercard"){
            echo "You selected Mastercard";
        }
        elseif($credit_card == "American Express"){
            echo "You selected American Express";
        }
        elseif($credit_card == "SBI"){
            echo "You selected SBI";
        }
        else{
            echo"Please Make a selection";
        }

    }
   

/*
    foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
    }
*/

/*
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
        echo "Username is missing";
    }
    elseif(empty($password)){
        echo "Password is missing";
    }
    else{
        echo "Hello {$username}";
    }
}
*/

?>