<?php

$x = 8;
if ($x === 7) {
    echo "Lucky Number 7";
}
if ($x === "7") {
    echo "Lucky Number 7";
}
if ($x != 8) {
    echo "Number 8";
}
if ($x > 8) {
    echo "7 is not greater 8, this would not be executed";
}
if ($x < 8) {
    echo "8 greater 7, this would be executed";
}
if ($x >= 7) {
    echo "7 is equal 7, this would be executed";
}
if ($x <= 6) {
    echo "7 is not less than or equal to 6 this would not be . executed";
}
