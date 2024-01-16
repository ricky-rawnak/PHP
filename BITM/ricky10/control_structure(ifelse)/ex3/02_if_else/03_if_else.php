<?php

$humen = [
    'name' => 'Jhon due',
    'age' => 21,
    'email' => 'jhon@gmail.com'
];

if (is_array($humen)) {

    if (isset($humen['name'])) {

        echo 'Name : ' . $humen[''] . '<br>';
    } else {
        echo "Name not found";
    }

    if (isset($humen['age'])) {
        echo 'Age : ' . $humen['age'];
    } else {
        echo "age not found";
    }
} else {
    echo 'humen is not an array!';
}
