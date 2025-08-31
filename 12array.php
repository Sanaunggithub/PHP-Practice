<?php
    $foods = array("apple", "banana", "coconut");

    // $food[0] = "orange";
    array_push($foods, "orange", "kiwi");

    array_pop($foods);

    array_shift($foods); // shift removes first element of the array.

    $foods =array_reverse($foods); // reverse returns a new array
    foreach ($foods as $food) {
        echo $food ."<br>";
    }

    echo count($foods);
?>