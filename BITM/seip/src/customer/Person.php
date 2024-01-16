<?php
namespace App\customer;

class Person{
    //public $name="Mr.Tom";

    private $title;
    private $firstName;
    private $lastName;
    private $salary="10000";
    public function walk(){
        return "I am walking........";
    }
    public function getSalary(){
return $this->salary;
    }
}