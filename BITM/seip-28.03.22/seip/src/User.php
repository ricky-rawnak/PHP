<?php
namespace App;

class User
{
private $firstName='a first name';
protected $lastName='a last name';
//public $age=0;
//public $username;
function __construct($firstname='default first name',$lastName='default last name')
{
    //$this->firstName=$firstname;
    //$this->lastName=$lastname;
if(isset($firstname) &&!empty($firstname)){
    $this->firstName=$firstname;
}
if(isset($lastName) &&!empty($lastName)){
    $this->lastName=$lastName;
}
}

public function setFirstName($firstName){
    $this->firstName=$firstName;

}
public function setLastName($lastName){
        $this->lastName=$lastName;

    }
public function setAge($age){
       $this->age=$age;
    }
public function setUserName($username){
      $this->username=$username;

    }
public function getFirstName(){
    return $this->firstName;
}
public function getLastName(){
        return $this->lastName;
    }
public function getFullName(){
    return $this->firstName." ".$this->lastName;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->firstName."".$this->lastName;
    }
    public function missClassConstant()
    {
        echo __LINE__;
        echo "<hr />";
        echo __FILE__;
        echo "<hr />";
        echo __METHOD__;
        echo "<hr />";
    }
}


















