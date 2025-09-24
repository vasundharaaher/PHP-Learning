<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username" ><br>

        <lable>Age</lable>
        <input type="text" name="age" ><br>

        <lable>Email</lable>
        <input type="text" name="email" ><br>

        <input type="submit" name="login" value="login" ><br>
    </form>
    
</body>
</html>

<?php 
    /*  // Data filteration
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username",
                                FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST,"age",
                            FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST,"email",
                                FILTER_SANITIZE_EMAIL);
       
        echo "Your username is: {$username}<br>";
        
        echo "Your age is: {$age}<br>";

        echo "Your email is: {$email}<br>";
    }
        */

    // Data vailidation
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username",
                                FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            echo "That email wasn't valid";
        }
        else{
            echo"Your email is : {$email}";
        }
    }

?>