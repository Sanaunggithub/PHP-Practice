<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="04post.php" method="post">
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
    echo $_POST["username"] . "<br>";
    echo "{$_POST["password"]} <br>";
?>