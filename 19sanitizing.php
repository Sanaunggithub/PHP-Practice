<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="19sanitizing.php" method="post">
        <p>
            <label>username:</label>
            <input type="text" name="username">
        </p>
        <p>
            <label>age:</label>
            <input type="text" name="age">
        </p>
        <p>
            <label>email:</label>
            <input type="text" name="email">
        </p>
        <p>
            <input type="submit" name="login" value="login">
        </p>
    </form>
</body>
<?php
    if (isset($_POST["login"])) {
        
        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT); // return true or false

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo "That number is not valid";
        } else {
            echo "You are {$age} years old";
        }
    }
?>
</html>