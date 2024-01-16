<?php


include_once ("vendor/autoload.php");
use App\customer\Person;
use App\greeting\Greeting;
/*
function _autoload($arg){
    echo 'hello';
}
include_once('greeting/Greeting.php');
include_once ('customer/Person.php');
/*
$person1=new Bitm\Person();
$person2=new Bitm\Person();
$person3=new Bitm\Person();
*/
$person1=new Person();
$person2=new Person();
$person3=new Person();

//echo "I am ".$person1->name." and ".$person1->walk()."<br>";
//echo $person1->name."<br>";

//$greeting1=new Greeting();
//echo $greeting1->sayHello();
echo $person1->getSalary();