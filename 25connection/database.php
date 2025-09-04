<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "business_db");

if (!$connection) {
    // . is string concatenation operator.
    die("Cannot connect: " . mysqli_connect_error());
}
echo "You are connected!";
?>
