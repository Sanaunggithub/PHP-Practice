<?php
    $name = "San Aung";
    $food = "pizza";
    $email = "fake@gmail.com";

    // int
    $age = 21;
    $quantity = 5;

    // float
    $gpa = 2.5;
    $price = 4.99;

    // boolean
    $isEmployed = true;
    $online = false;

    $total = null; // no value
    $total = $quantity * $price;

    echo "hello {$name} <br>";
    echo "{$name} like {$food} <br>";
    echo "Your emai: {$email} <br>";

    echo "You are {$age} years old <br>";

    echo "Your gpa is {$gpa} <br>";

    echo "Your pizza is \${$price} <br>";

    echo "online status: {$online} <br>";

    echo "Your total is \${$total} <br>";
?>