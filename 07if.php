<?php

    $adult = 21;

    if ($age >= 18) {
        echo "You may enter the website";
    } elseif($age <= 0){
        echo "You are just born";
    } else {
        echo "You must be 18+";
    }

?>