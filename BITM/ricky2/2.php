<?php

/*
echo "<h1>Boolean</h1>";
echo "<h3>Example 1</h3>";

echo "<p>Paragraphs are the building blocks of papers. 
Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, 
a paragraph is half a page long, etc. 
Length and appearance do not determine whether a section in a paper is a paragraph.</p>";

$a=false;
$b=true;
echo $a;
echo $b;
echo "<br>";
echo "<br>";


echo "<h1>Float</h1>";
echo "<h3>Example 1</h3>";
$x=22.41;
echo $x;
echo "<br>";
echo "<h3>Example 1</h3>";
$a=11.365;
echo $a;
echo "<br>";
var_dump($a);

echo "<h1>Integer</h1>";
echo "<h3>Example 1</h3>";
$x=123;
echo $x;
echo "<br>";

echo "<h3>Example 2</h3>";
$a=100;
echo $a;
echo "<br>";
var_dump($a);


echo "<h1>IF-ELSE</h1>";
echo "<h2>Example 1</h2>";

$var = 0;
if(empty($var)) {
    echo '$var is either 0 ,empty, or not set at all';
}
else {
    echo 'not empty';
}

echo "<h2>Example 2</h2>";

$var1 = '';
if(empty($var1)) {
    echo '$var1 is either 0 ,empty, or not set at all';
}
else {
    echo 'not empty';
}

echo "<h2>Example 3</h2>";

$var2;
if(empty($var2)) {
    echo '$var2 is either 0 ,empty, or not set at all';
}
else {
    echo 'not empty';
}

echo "<h2>Example 4</h2>";

$var3 = '123';
if(empty($var3)) {
    echo '$var3 is either 0 ,empty, or not set at all';
}
else {
    echo 'not empty';
}
echo "<h2>Example 5</h2>";

//Array
$var4 = [1,2];
if(empty($var4)) {
    echo '$var4 is either 0 ,empty, or not set at all';
}
else {
    echo 'not empty';
}

echo "<h2>Example 6</h2>";

$var5 = true;
if(empty($var5)) {
    echo '$var5 is either 0 ,empty, or not set at all';
}
else {
    echo 'not empty';
}
echo "<br>";

$var6 = false;
if(empty($var6)) {
    echo '$var6 is either 0 ,empty, or not set at all';
}
else {
    echo 'not empty';
}
echo "<br>";

$var7 = null;
if(empty($var7)) {
    echo '$var7 is either 0 ,empty, or not set at all';
}
else {
    echo 'not empty';
}
echo "<br>";

//Find ARRAY
echo "<h1>ARRAY</h1>";
echo "<h2>Example 1</h2>";
$students=array('Rahim','Karim','Fatima');
if(is_array($students)) {
    echo "Array";
}
else {
    echo "Not array";
}
echo "<br>";
//short-cut of if-else(Ternary operator)
echo is_array($students)?"Array":"Not Array";
echo "<br>";

echo "<h2>Example 2</h2>";
$my_student='This is string';
echo is_array($my_student)?"Array":"Not Array";


echo "<h1>NULL</h1>";
echo "<h2>Example 1</h2>";
$var_name=null;
if(is_null($var_name)) {
    echo 'Variable is null';
}
else {
    echo 'Variable is not null';
}
echo "<br>";

echo "<h2>Example 2</h2>";
$var_name1=0;
if(is_null($var_name1)) {
    echo 'Variable is null';
}
else {
    echo 'Variable is not null';
}
echo "<br>";

//isset
echo "<h1>SET</h1>";
echo "<h2>Example 1</h2>";
$var=' ';
if(isset($var)) {
    echo 'This var is set';
}
else {
    echo 'This var is not set';
}
echo "<br>";

echo "<h2>Example 2</h2>";
$var2;
if(isset($var2)) {
    echo 'This var is set';
}
else {
    echo 'This var is not set';
}
echo "<br>";

echo "<h2>Example 3</h2>";

if(isset($var30)) {
    echo 'This var is set';
}
else {
    echo 'This var is not set';
}
echo "<br>";

//var_dump
echo "<h1>VAR DUMP</h1>";
echo "<h2>Example 4</h2>";
$x1;
$a1="test";
$b1="another set";
var_dump(isset($x1));
echo "<br>";
var_dump(isset($a1));
echo "<br>";
var_dump(isset($a1,$b1));
echo "<br>";


echo "<h2>Example 5</h2>";
unset($a2);
var_dump(isset($a2));
echo "<br>";
var_dump(isset($a2,$b2));
echo "<br>";

echo "<h2>Example 6</h2>";
$foo=NULL;
var_dump(isset($foo));
echo "<br>";

//print_r
echo "<h1>Print R</h1>";
echo "<pre>";
$a3=array('a'=>'apple','b'=>'mango','c'=>'orange');
$a3=array('a'=>'apple','b'=>'mango','c'=>'array'('x77','y77','z77'));
print_r($a3);

echo "</pre>";


echo "<h1>Serialized Data</h1>";
$serialized_data=serialize(array('Math','Science','Language'));
echo $serialized_data;
echo "<br>";
echo "<br>";
var_dump($serialized_data);
echo "<br>";
echo "<br>";
echo "<pre>";
print_r(unserialize($serialized_data));
echo "</pre>";
*/
/*
echo "<pre>";
$arr=array(1,2,array("a","b","c"));
var_dump($arr);
echo "</pre>";
*/
/*
$foo ='bar';
//echo $foo;
unset($foo);
echo $foo;
*/

//gettype
$data=array(1,1.2,NULL,new stdClass,'foo');
foreach($data as $value) {
    echo gettype($value)."<br>";
}



?>