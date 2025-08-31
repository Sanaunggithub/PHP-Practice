<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="10for.php" method="post">
        <p>
            <label>Enter a number:</label>
            <input type="text" name="counter">
            <input type="submit" value="start">
        </p>
    </form>
</body>
</html>
<?php
    $counter = $_POST["counter"];

    for($i = 0; $i <= $counter; $i++){
        echo $i ."<br>";
    }
?>