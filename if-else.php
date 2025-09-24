<?php 

    $age = 11;
    if($age >= 100){
        echo "you are too old to enter this site....";
    }
    elseif($age <= 18){
        echo "you may enter this site";
    }
    elseif($age <= 0){
        echo "That wasn't a valid age";
    }
    else{
        echo "You must be 18+ to enter";
    }

echo "<br><br><br>";

    $adult = false;
    if($adult){
        echo "You may enter this site";
    }
    else{
        echo "You must be an adult to enter";
    }



?>