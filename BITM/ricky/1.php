<?php

echo "hi";
echo "<br>";

//var
$txt="HELLO WORLD";
$number=10;
echo $txt;

//define and const
define("MESSAGE","HELLO");
const CONSTANT = 'Hello World';
echo CONSTANT;

//single quote
echo "<h2>SINGLE QOUTE</h2>";
echo "<h3>Example 1</h3>";
$str1='HELLO';
echo $str1;
echo "<br>";
echo 'HELLO';
echo "<br>";

echo "<h3>Example 2</h3>";
$str2='HELLO text
multiple line
text within single qouted string. ';
echo $str2;
echo "<br>";

echo "<h3>Example 3</h3>";
$str3='Using double "quote" inside 
single quoted string';
echo $str3;
echo "<br>";

echo "<h3>Example 4</h3>";
$str4='Using escape sequence \n in single quoted string';
echo $str4;
echo "<br>";

echo "<h3>Example 5</h3>";
$num=10;
$str5='variable $num declared from single quote';
echo $str5;
echo "<br>";

echo "<h3>Example 6</h3>";
$num=10;
$str6="variable $num declared from double quot";
echo $str6;
echo "<br>";

echo "<h3>Example 7(Good Practice)</h3>";
$num=10;
$str7='variable '.$num;
echo $str7;
echo "<br>";

echo "<h3>Example 8</h3>";
$str8='trying backlash n and backlash t inside single quoted string \n \t';
echo $str8;
echo "<br>";

/*
$my_school='Govt. Girls' School';
echo $my_school;
echo "<br>";
*/

echo "<h3>Example 9</h3>";
$my_school="Govt. Girls' School";
echo $my_school;
echo "<br>";

echo "<h3>Example 10</h3>";
$my_school='Govt. Girls\' School';
echo $my_school;
echo "<br>";

echo "<h3>Example 11</h3>";
$str9='Using single quote \'my quote\' and \\backlash and single \backlash';
echo $str9;
echo "<br>";

echo "<h3>Example 12</h3>";
echo 'Arnold said: "I\'ll be back"';
echo "<br>";

echo "<h3>Example 13</h3>";
echo 'new line with break';
echo "<br>";
echo ' it is \n new
line';
echo "<br>";
echo " it is <br> break line";
echo "<br>";
echo nl2br("New line with \n backlash and built in function
math");

echo "<h3>Example 14</h3>";
echo 'You deleted C:\ \*.*?';
echo "<br>";

echo "<h3>Example 15</h3>";
echo 'You deleted C:\\ \*.*?';
echo "<br>";

echo "<h3>Example 16</h3>";
echo 'You deleted C:\\\*.*?';
echo "<br>";

echo "<h3>Example 17</h3>";
echo 'You deleted C:\\ \\*.*?';
echo "<br>";

echo "<h3>Example 18</h3>";
echo 'You deleted C:\*.*?';
echo "<br>";

echo "<h3>Example 19</h3>";
echo 'You deleted C:\abc.*?';
echo "<br>";

echo "<h3>Example 20</h3>";
echo 'You deleted C:\'.*?';
echo "<br>";

//double quote
echo "<h2>DOUBLE QOUTE</h2>";
echo "<h3>Example 1</h3>";
$str10="Double quote hello";
echo $str10;

echo "<h3>Example 2</h3>";
echo "syntax error ";
/*
echo "<h3>Example 2</h3>";
$str11="Double "quote" hello";
echo $str11;
*/

echo "<h3>Example 3</h3>";
$str11="Double \"quote\" hello with backlash";
echo $str11;
echo "<br>";

echo "<h3>Example 4</h3>";
$x=(7+3)*5;
echo $x."\n";

echo "<h3>Example 5</h3>";
$y=100/(4*5);
echo $y."\n";

echo "<h3>Example 6</h3>";
$z=7+(5*(8+2)+(4+6));
echo $z."\n";

echo "<h2>HEREDOC</h2>";
echo "<h3>Example 1</h3>";




?>