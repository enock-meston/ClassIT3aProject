
<?php
    // add 1 days to date
    
    $dayToDay="12";
    $NewDate=Date('y-m-d', strtotime("+".$dayToDay."days"));
    $to  = date('y-m-d');

    if (date('Y-M-d') == $NewDate) {
        echo "done <br>";
    } else {
        echo "not equal <br>";
    }
    
    echo "to day is:".date('Y-M-d') . "<br>";
    echo "added day is ".$dayToDay." = ".$NewDate. "<br>";