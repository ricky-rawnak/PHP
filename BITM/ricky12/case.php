<?php
$weekday=3;

switch ($weekday) {

    case 1:case 2:case 3:
        echo "Today is Sunday.Today is Monday";
        echo "<br>";
        echo "This is just test.You are eligible";
        break;
    case 4:
        echo "Today is Tuesday";
        break;
    case 5:
        echo "Today is Thursday";
        break;
    case 6:
        echo "Today is Wednesday";
        break;
    case 7:
        echo "Today is Friday";
        break;
    default:
        echo "Enter correct number";
        break;
}
?>