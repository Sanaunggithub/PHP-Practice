<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06raduis.php" method="post">
        <p>
            <label>radius:</label>
            <input type="text" name="radius">
            <input type="submit" value="calculate">
        </p>
    </form>
</body>
</html>
<?php
    $radius = $_POST["radius"];
    $circum = null;

    $circum = pi()* 2 * $radius;
    $circum = round($circum, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    echo "Cirumference: {$circum} cm <br>";
    echo "Area: {$area} cm <br>";
?>