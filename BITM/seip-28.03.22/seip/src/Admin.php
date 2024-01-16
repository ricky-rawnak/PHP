<?php
/**
 * Created by PhpStorm.
 * User: BITM PHP
 * Date: 3/28/2022
 * Time: 5:04 PM
 */

namespace App;


class Admin extends User
{
    public function expressYourRole(){
        return "Admin";
    }

    public function sayHello(){
        return "Hello admin".$this->username;
    }
}