<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="03get.php" method="get">
        <p>
            <label>username:</label>
            <input type="text" name="username">
        </p>
        
        <p>
            <label>password:</label>
            <input type="password" name="password">
        </p>
        
        <p>
            <input type="submit" value="Log in">
        </p>
    </form>
</body>
</html>
<?php
    echo $_GET["username"] . "<br>";
    echo "{$_GET["password"]} <br>";
?>