<?php 
        // Associative array = An array made of key => value pairs

$capitals = array("USA"=> "Washington D. C.",
                  "Japan"=> "Kyoto",
                  "South Korea"=> "Seoul" ,
                  "India"=> "New Delhi");
/*
echo $capitals["USA"];

echo "<br>";
*/

// displaying key value pair
/*
foreach($capitals as $key => $value){
    echo "{$key} {$value} <br>";
}
*/

//changing the value using key
/*
$capitals["USA"] = "Las Vegas";
foreach($capitals as $key => $value){
    echo "{$key} => {$value} <br>";
}
*/

//array_pop($capitals);
//array_shift($capitals);

// All keys of array
/*
$keys = array_keys($capitals);
foreach($keys as $key){
    echo "{$key}  <br>";
}
*/

// First and last key of Ass. array
/*
$firstkey = array_key_first($capitals);
echo $firstkey;

$lastkey = array_key_last($capitals);
echo $lastkey;
*/

// For printing values
/*
$values = array_values($capitals);
foreach($values as $value){
    echo "{$value}  <br>";
}
    */

// Fliping Ass. Array key values090
//$capitals = array_flip($capitals);

// Reverse array 
//$capitals = array_reverse($capitals);



foreach($capitals as $key => $value){
    echo "{$key} => {$value} <br>";
}

?>