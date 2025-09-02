<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="16checkboxes.php" method="post">
        <p>
            <input type="checkbox" name="foods[]" value="pizza"> Pizza
        </p>

        <p>
            <input type="checkbox" name="foods[]" value="burger"> Burger
        </p>

        <p>
            <input type="checkbox" name="foods[]" value="hotdog"> Hot Dog
        </p>

        <p>
            <input type="checkbox" name="foods[]" value="taco"> Taco
        </p>

        <p>
            <input type="submit" name="submit" value="Submit">
        </p>
    </form>
</body>
</html>
<?php

    // after clicking submit button
    if (isset($_POST["submit"])) {
        
        $foods = $_POST["foods"];

        foreach ($foods as $food) {
            echo $food ."<br>";
        }
    }
?>