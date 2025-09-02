<?php
    function happy_birthday($name, $year){
        echo "Happy Birthday {$name}<br>";
        echo "You are {$year} years old! <br>";
    }

    happy_birthday("Patrick", 20);

    function is_even(int $number){
        return $number % 2;
    }

    echo is_even(11);

?>