<?php 

    $username = "Bro Code";
    $usernamearray = array("bro","code","is","fun");
    $date = "123-456-789";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username); // remove space before and after string
    // $username = str_pad($username, 20,"/");      // creates string with 20 character with the help of third parameter
    // $date = str_replace("-","/",$date);
    // $username = strrev($username);
    // $username = str_shuffle($username);  // random shuffling
    // $equal = strcmp($username, "Bro Code");       // returns 0 -> complete match   -1 -> extra char   1 -> less char or unacurate
    // $count = strlen($username);
    // $index = strpos($username, " ");        // returns first place index where element find
    // $firstname = substr($username, 0, 3);   // returns sub string second parameter is starting position and third parameter length of sub string
    // $fullname = explode(" ",$username);     // spliting it into array with help of seprator
    $usernamearray = implode("-",$usernamearray);


    // echo "{$username}<br>";
    // echo $date;
    // echo $equal;
    // echo $count;
    // echo $index;
    // echo $firstname;
    /* 
    foreach($fullname as $name){
        echo $name."<br>";
    };
    */
    echo $usernamearray;

?>