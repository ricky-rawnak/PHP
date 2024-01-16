<!DOCTYPE html>
<html>

<body>

    <?php
    $t = date("H");

    if ($t < "6") {
        echo "Have a good day!";
    }
    else{
        echo "Have a nice day!";
    }
    ?>

</body>

</html>