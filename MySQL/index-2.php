<?php 

    include("first-mysql.php");

    $sql = "SELECT * FROM users WHERE name = 'Spon225'";
    
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
        echo $row["name"] . "<br>";
        echo $row["reg-date"] . "<br>";
        }
        
    } 
    else{
        echo"No user found";
    }

    mysqli_close($conn);

?>