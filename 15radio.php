<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="15radio.php" method="post">
        <p> 
            
            <input type="radio" name="credit-card" value="Visa"> VisaCard
        </p>
        
        <p>
            <input type="radio" name="credit-card" value="Mastercard"> Mastercard
        </p>

        <p>
            <input type="radio" name="credit-card" value="ExpressCard"> Express Card
        </p>

        <p>
            <input type="submit" name="confirm" value="Confirm"> 
        </p>
    </form>
</body>
</html>
<?php

    if (isset($_POST["confirm"])) {
        
        if(isset($_POST["credit-card"])){
            $credit_card = $_POST["credit-card"];
            
        } 
        
        if ($credit_card == "Visa") {
            echo "You selected Visa Card";
        } elseif ($credit_card == "Mastercard"){
            echo "You selected Master Card";
        } elseif ($credit_card == "ExpressCard"){
            echo "You selected Express Card";
        } else {
            echo "Please make a selection";
        }

    }
?>