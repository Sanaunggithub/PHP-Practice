<?php

    // cookie = Information about a user stored in a user's web-browser targeted
    //          advertisements, browsing preferences, and other non-sensitive data


    setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); // will expire 2 days
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/"); // will expire 3 days
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/"); // will expire 4 days

    // deleting cookie
    setcookie("fav_dessert", "ice cream", time() - 0, "/"); // subtract time with 0

    // foreach ($_COOKIE as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }


    if (isset($_COOKIE["fav_food"])) {
        echo "buy some {$_COOKIE["fav_food"]} !!! <br>";
    } else {
        echo "I don't know your favorite food <br>";
    }
?>