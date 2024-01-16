<?php
include_once ("vendor/autoload.php");

use App\User;
use App\Admin;
$admin1=new Admin();
$admin1->setUserName('Jenny');
echo $admin1->sayHello();
//echo $admin1->expressYourRole();

die();
use App\Vehicle\Car;

use App\Vehicle\SportsCar;



$myCar=new Car();
echo $myCar->hello();
$mySportsCar=new SportsCar();
echo $mySportsCar->hello();








die();
//use App\User;
$user1=new User('Mr.','Bin');
//$user1->setFirstName('Jone');
//$user1->setLastName('Doe');
echo $user1->missClassConstant();







die();
echo $user1->getFullName();

echo "<hr />";
//echo $user1->getFirstName('Alex');










die();
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