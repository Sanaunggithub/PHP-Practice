<?php
    // associative array = An array made of key=>value pairs

    $capitals = array("USA" => "Washington D.C." ,
                     "Japan" => "Tokyo", 
                     "South Korea" => "Seoul", 
                     "India" => "New Delhi");

    // $capitals["USA"] = "Los Vegas"; change the value
    // $capitals["China"] = "Beijing"; add new key-value pair

    // array_pop($capitals); remove the last element    
    // array_shift($capitals); remove the first element


    // $keys = array_keys($capitals); // get all keys

    // $values = array_values($capitals); // get all values

    // $capitals = array_flip($capitals); // flip key and value

    // $capitals = array_reverse($capitals); // reverse the array

    echo count($capitals) . "<br>   ";

    foreach($capitals as $key => $value ){
        echo "{$key} = {$value} <br>";
    }

?>