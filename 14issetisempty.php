<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="14issetisempty.php" method="post">
        <p>
            <label>username:</label>
            <input type="text" name="username">
        </p>
        <p>
            <label>password:</label>
            <input type="password" name="password">
            <input type="submit" name="login" value="Log in">
        </p>
    </form>
</body>
</html>
<?php
    // isset() = Returns True if a variable is declared and not null
    // empty() = Returns True if a variable is not declared, false, null, ""  

    // foreach ($_POST as $key => $value) {
    //     echo "{$key} = {$value}";
    // }

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "username is missing <br>";
        } elseif(empty($password)){
            echo "password is missing <br>";
        } else {
            echo "hello {$username} <br>";
        }
    }
?>