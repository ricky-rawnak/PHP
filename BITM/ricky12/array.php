
<?php



$arr = array (
    array(10,100,101),
    array(120,130,140),
    array(50,90,80)
);
echo "<pre>";
foreach ($arr as $x) {

print_r($x);
}
echo "</pre>";







die();


$size=array("M","XL","XXL");
$product=array("Tshirt","Shoes","glass");

foreach ($size as $value) {
    foreach ($product as $value1) {
        echo "this is a $value $value1.<br>";
    }
}





die();
$cars = array (
    array(
        "name"=>"Volvo",
        "stock"=>22,
        "sold"=>18
    ),
    array(
        "name"=>"BMW",
        "stock"=>20,
        "sold"=>18
    ),
    array(
        "name"=>"Land Rover",
        "stock"=>40,
        "sold"=>30
    )
);
foreach ($cars as $value) {
    foreach ($value as $key1 => $value1) {
        echo "{$key1} : $value1<br>";
        }
}
?>