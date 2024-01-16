<?php

$humen = [
    'name' => 'Jhon due',
    'age' => 21,
    'email' => 'jhon@gmail.com'
];

if (is_array($humen)) {

    if (isset($humen['name'])) {

        echo 'Name : ' . $humen['name'] . '<br>';
    }

    if (isset($humen['age'])) {
        echo 'Age : ' . $humen['age'];
    }
}
