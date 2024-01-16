<?php

echo "1st method <br/>";
$fruits=array("orange","apple","mango");
if(is_array($fruits)){
    echo "array";
}
else{
    echo "not array";
}
echo "<br>";
echo "2nd method";
echo "<br>";
echo is_array($fruits)? 'array': 'not array';






