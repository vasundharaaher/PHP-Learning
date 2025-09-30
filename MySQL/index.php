<?php 
    include("first-mysql.php");

    $username = 'Spon225';
    $password = 'hard';
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (`name`, `password`) VALUES('Spon225','hard')";

    try{
        mysqli_query($conn , $sql);
        echo"User is now registered";
    }
    catch(mysqli_sql_exception){
        echo"Could not register user";
    }
    

    mysqli_close($conn);
?>
