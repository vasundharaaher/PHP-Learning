<?php 

// cookie = Information about a user stored in a user's web-browser 
//          target advertisements , browsing , preferences  , and other non-sensitive data

    setcookie("fav_food","pizza",time() + 10 ,"/");
    setcookie("fav_drink", "coffeee" , time() + 10 ,"/");
    setcookie("fav_dessert", "ice cream" , time() + 10 ,"/");

    // foreach($_COOKIE as $key => $value){
    //     echo"{$key} = {$value} <br>";
    // }


    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]}...!!!";
    }
    else{
        echo"I don't know your favorite food";    }

?>