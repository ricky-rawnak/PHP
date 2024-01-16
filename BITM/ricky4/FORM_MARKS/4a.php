<?php
$mark=60;

if ($mark < "33") {
    echo "F < 33";
} elseif ($mark>=33 && $mark<=39) {
    echo "E 33-39";
}
 elseif ($mark>=40 && $mark<=49) {
    echo "D 40-49";
}
elseif ($mark>=50 && $mark<=59) {
    echo "C 50-59";
}
 elseif ($mark>=60 && $mark<=69) {
    echo "B 60-69";
}

else {
    echo "A+";
}
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "mark : {$_POST['mark']}";
*/
?>