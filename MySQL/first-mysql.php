<?php 

        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "php-learning";
        $conn = "";
        // $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
         try{
            $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

          }
          catch(mysqli_sql_exception){
              echo"You are  not connected!";
          }

        if($conn){
            echo"you are connected!";     //  if you declare mysqli_connect   
         } 
        // else{
        //     echo"You are not connected!";   // if you not declare mysqli_connect
        // }

?>