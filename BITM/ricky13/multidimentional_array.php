<?php

$marks=array(
    "sara"=>array(
        "phy"=>35,
        "math"=>30,
        "chem"=>39
    ),

    "jon"=>array(
        "phy"=>30,
        "math"=>32,
        "chem"=>29
    ),

    "zara"=>array(
        "phy"=>31,
        "math"=>22,
        "chem"=>39
    )


);

echo "<pre>";
print_r($marks);
echo "</pre>";
echo "<br>";

echo "Marks for sara in physics: ";
echo $marks['sara']['phy']."<br/>";

echo "Marks for jon in maths: ";
echo $marks['jon']['math']."<br/>";

echo "Marks for zara in chemistry: ";
echo $marks['zara']['chem']."<br/>";

echo sizeof($marks);