
<?php

$arr=array(
    array(10,100,101),
    array(120,130,140),
    array(150,90,80)
);


$x=0;
$temp=0;
echo "<pre>";
foreach ($arr as $value) {
    print_r($value);
    echo "<br>";
foreach ($value as $value1) {
    $x=$x+$value1;

}
    echo $x;
    echo "<br>";
    $temp=$temp+$x;
    $x=0;

}
echo $temp;

echo "</pre>";

















?>
