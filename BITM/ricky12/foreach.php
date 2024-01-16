<?php




$name=[
    "firstname"=>"jhon",
    "lastname"=>"doe",
    "middlename"=>"brey"
];
foreach ($name as $x=>$value){
    echo "<li>$x: $value</li>";
}






die();
    $items=[
        "item1"=>"Mobile",
        "item2"=>"Charger",
        "item3"=>"Cable"
    ];
    echo "<ol>";
 foreach ($items as $value){
     echo '<li>'.$value.'</li>';
 }
echo "</ol>";


    die();
    $salaries=[2000,3000,10000,5000];
    foreach ($salaries as $salary){
        echo "salary:$salary<br>";
    }



    die();

    $students=['a','b','c'];
    foreach ($students as $student){
        echo '<li>'.$student.'</li>';
    }

    ?>
