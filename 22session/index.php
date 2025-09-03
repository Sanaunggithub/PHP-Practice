<?php
    // session = Superglobal variable used to store information on user
    //           to be used across multiple pages.
    //           A user is assigned a session-id
    //           ex. login credentials

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>
            <label>username</label>
            <input type="text" name="username">
        </p>
        <p>
            <label>password</label>
            <input type="password" name="password">
        </p>
        <p>
            <input type="submit" name="login" value="log in">
        </p>
    </form>
</body>
</html>
<?php
    if (isset($_POST["login"])) {
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");
        } else {
            echo "missing username/password <br>";
        }
    }
?>