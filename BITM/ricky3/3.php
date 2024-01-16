<?php

//explode function
echo "<h2>String</h2>";
echo "<h3>Explode</h3>";
$pizza= "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces =explode(' ',$pizza);
//$pieces =explode('p',$pizza);
echo "<pre>";
print_r($pieces);
echo "</pre>";
echo "<br>";
echo $pieces[0];
echo "<br>";
echo $pieces[1];
echo "<br>";
echo $pieces[2];
echo "<br>";
echo $pieces[3];
echo "<br>";
echo "<br>";

$date="2022-02-24";
$date_parts=explode('-',$date);
/*
echo "Year: ".$date_parts[0]." ";
echo "Month: ".$date_parts[1]." ";
echo "Day: ".$date_parts[2]." ";
*/
echo "<br>";
echo "<br>";
//list function
list($y ,$m ,$d )=explode('-',$date);
echo "Year: ".$y." ";
echo "Month: ".$m." ";
echo "Day: ".$d." ";

//Implode function
echo "<h2>Implode</h2>";
echo "<h3>Example 1</h3>";
$array=array('lastname','email','phone');
$comma_separated=implode(', ',$array);
var_dump($comma_separated);
echo $comma_separated;

//String length function
echo "<h2>Strlen</h2>";
echo "<h3>Example 1</h3>";
$str='abcdefgh';
echo strlen($str);

echo "<br>";
$str=' ab cd ef gf';
echo strlen($str);

//Find position
echo "<h2>String Position</h2>";
echo "<h3>Position</h3>";
$mystring='Hello abc';
$findme='ab';
$pos=strpos($mystring,$findme);
echo $pos;
echo "<br>";

//lower-upper
echo "<h3>Lower</h3>";
$str1="Mary had a Little Lamp AND SHE LOVED It";
$str2=strtolower($str1);
echo $str2;

echo "<h3>Upper</h3>";
$str3="Mary had a Little Lamp AND SHE LOVED It";
$str4=strtoupper($str3);
echo $str4;
echo "<br>";

echo "<h3>Substr</h3>";
//$rest=substr("abcdef",2,3);
$rest=substr("abcdef",-2,4);
echo $rest;

echo "<h3>md5</h3>";
$str5='apple';
echo md5($str5);

echo "<h3>nl2br</h3>";
echo nl2br("Paragraphs are the building blocks of papers.\n Many students define paragraphs in terms of length: \n a paragraph is a group of at least five sentences, 
a paragraph is half a page long, etc.Length and appearance do not determine whether \n a section in a paper is a paragraph");

echo "<h3>Repeat</h3>";
echo str_repeat("BITM, ",10);

echo "<h3>Replace</h3>";
$phrase ="You should eat fruits,vegetables and fiber every day";
$healthy=array("fruits","vegetables","fiber");
$yummy=array("pizza","beer","ice cream");
$newphrase= str_replace($healthy,$yummy,$phrase);
echo $newphrase;

echo "<h3>Trim</h3>";
$str6 ="Hello World!";
echo trim($str6,"Hed!");
echo "<br>";
echo ltrim($str6,"Hed!");   //left trim
echo "<br>";
echo rtrim($str6,"Hed!");   //right trim
echo "<br>";

echo "<h3>Ucfirst</h3>";
$foo ="hello world!";
echo ucfirst($foo);






?>
