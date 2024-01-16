<pre>

<?php

//unique

//asort

//$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana");


//compact

$city="San Fransisco";
$state="CA";
$event="SIGGRAPH";
$locations_vars=array("city","state");
$result=compact("event","nothing_here",$locations_vars);
print_r($result);







die();
//sum

$a=array(2,4,6,8);
echo "sum(a) = ".array_sum($a). "\n";

$b=array("a" =>1.2, "b"=>2.3,"c"=>3.4);
echo "sum(b) = ".array_sum($b) ."\n";



die();

//array_splice

$input=array("red", "green", "blue","yellow");
array_splice($input,2);
print_r($input);
//red,green

$input=array("red", "green", "blue","yellow");
array_splice($input,1,-1);
print_r($input);
//red,yellow

$input=array("red", "green", "blue","yellow");
array_splice($input,1,count($input),"orange");
print_r($input);
//red,orange

$input=array("red", "green", "blue","yellow");
array_splice($input,-1,1,array("black","maroon"));
print_r($input);
//red,green,blue,black,maroon

$input=array("red", "green", "blue","yellow");
array_splice($input,3,0,"purple");
print_r($input);
//red,green,blue,purple,yellow





die();

//slice
$input=array("a", "b", "c","d","e");
$output=array_slice($input,2);
$output=array_slice($input,-2,1);
$output=array_slice($input,0,3);

print_r(array_slice($input,2,-1));
print_r(array_slice($input,2,-1,true));





die();

//shift
$stack=array("orange","banana","apple","raspberry");
$fruit=array_shift($stack);
print_r($stack);



die();
//search
$array=array(0=>'blue',1=>'red',2=>'green',3=>'red');
$key=array_search('green',$array);
$key=array_search('red',$array);
print_r($array);
print_r($key);



die();

//reverse
$input=array("php",4.0,array("green","red"));
$reversed=array_reverse($input);
$preserved=array_reverse($input,true);

print_r($input);
print_r($reversed);
print_r($preserved);


die();

//replace
$base=array("orange","banana","apple","raspberry");
$replacements=array(0=> "pineapple", 4=> "cherry");
$replacements2=array(0=>"grape");
$basket=array_replace($base,$replacements,$replacements2);
print_r($basket);



die();


//random
$input=array("Neo", "Morpheus", "Trinity","Cypher","Tank");
$rand_keys=array_rand($input,2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

?>

</pre>
