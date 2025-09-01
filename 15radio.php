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
        
        switch ($credit_card) {
            case 'Visa':
                echo "You selected Visa Card<br>";
                break;
            
            case 'Mastercard':
                echo "You selected Mastercard<br>";
                break;

            case 'ExpressCard':
                echo "You selected ExpressCard<br>";
                break;

            default:
                echo "Please make a selection <br>";
                break;
        }

    }
?>