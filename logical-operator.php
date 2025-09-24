<?php 

    // Logical operators = combine conditional statements 
    // if(!condition1)

    // && = True if both conditions are true
    // || = True if at least one condition is true
    // ! = True if false. false if true.

   /* $temp = 25;
    if($temp >= 0 && $temp <= 30){
        echo "The weather is good. ";
    }
    else{
        echo "The weather is bad. ";
    } */

    /*
    $temp = 25;
    if($temp < 0 || $temp > 30){
        echo "The weather is good. ";
    }
    else{
        echo "The weather is bad. ";
    }
        */

    /*
    $temp = 15;
    $cloudy = false;

    if($temp < 0 || $temp > 30){
        echo"The wether is bad.<br>";
    }
    else{
        echo"The wether is good.<br>";
    }

    if(!$cloudy){
        echo"It's Sunny.";
    }
    else{
        echo"It's cloudy.";
    }
    */
    /*
    $age = 25;
    $citizen = false;

    if(!$age >= 18 || $citizen){
        echo"You can vote";
    }
    else{
        echo"You canot vote";
    }
        */

    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";

?>