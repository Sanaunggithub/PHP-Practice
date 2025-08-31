<?php
    // switch = replacement to using many elseif statements

    $grade = "C";

    switch ($grade) {
        case 'A':
            echo "You got A";
            break;
        
        case 'B':
            echo "You got B";
            break;

        case 'C':
            echo "You got C <br>";
            break;

        case 'D':
            echo "You got D";
            break;
        
        case 'F':
            echo "You failed";
            break;

        default:
            echo "{$grade} is not a grade";
            break;
    }


    echo date("l");                 // Sunday
    echo date("Y-m-d");             // 2025-08-31
    echo date("l, F d, Y");         // Sunday, August 31, 2025
    echo date("h:i:s a");           // 02:30:15 pm
    echo date("Y-m-d H:i:s");       // 2025-08-31 14:30:15

    echo $date;
?>