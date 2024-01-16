<?php


$search_array=array(
    'first'=>1,
    'second'=>4
);

if(array_key_exists('first',$search_array)){
    echo "The 'first' element is in array";
}
else{
    echo "The 'last' element is not in array";
}