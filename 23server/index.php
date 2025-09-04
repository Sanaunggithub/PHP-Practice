<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PHP_SELF contains current filename -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <p>
            <label>username:</label>
            <input type="text" name="username">
        </p>
        <p>
            <input type="submit" value="submit">
        </p>
    </form>
</body>
</html>
<?php
    // $_SERVER = SGB that contains headers, paths, and script locations.
    //            The entries in this array are connected by the web server.
    //            Shows nearly everything you need to know about the current web page env.

    // foreach ($_SERVER as $key => $value) {
    //     # code...
    //     echo "{$key} = {$value} <br>";
    // }


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Form submitted successfully <br>";
    }
?>