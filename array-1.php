<?php 

$food = array("apple","orange","banana","coconut");
 
/* // for loop on array
for($i = 0; $i < 4 ; $i++){
        echo "{$food[$i]}<br>"; 
    }

*/

//push opration on array
//array_push($food,"pineapple","kiwi");

//pop opration on array
//array_pop($food);

// remove from front side shift array
//array_shift($food);

// Count elements of array
//echo count($food);


/*
foreach($food as $foodadd){
    echo $foodadd . "<br>";
}
*/

// reversing array

$reversed_food = array_reverse($food);

foreach($reversed_food as $foodadd){
    echo $foodadd . "<br>";
}

?>