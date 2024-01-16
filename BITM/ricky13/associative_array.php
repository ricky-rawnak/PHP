<?php

$salaries=array(
    "sara"=>2000,
    "jon"=>1000,
    "zara"=>500
);

echo "Salary of sarah is ".$salaries['sara']. "<br/>";
echo "Salary of jon is ".$salaries['jon']."<br/>";
echo "Salary of zara is ".$salaries['zara']."<br/>";


$salaries['sara']="high";
$salaries['jon']="medium";
$salaries['zara']="low";

echo "Salary of sarah is ".$salaries['sara']."<br/>";
echo "Salary of jon is ".$salaries['jon']."<br/>";
echo "Salary of zara is ".$salaries['zara']."<br/>";

















 ?>