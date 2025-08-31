<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="05math.php" method="post">
        <p>
            <label>x</label>
            <input type="text" name="x">
        </p>
        <p>
            <label>y</label>
            <input type="text" name="y">
            
        </p>
        <p>
            <label>z</label>
            <input type="text" name="z">
            <input type="submit" value="total">
        </p>
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x); round down
    // $total = ceil($x); round up
    // $total = pow($x, $y);
    // $total = sqrt($x);

    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);

    // $total = pi();

    // $total = rand(1, 6); generate between 1 and 6
    echo $total;

?>