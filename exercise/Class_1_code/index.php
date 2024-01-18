<?php 
    echo"Hello World";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
    <style></style>
</head>
<body>
    <h1>
    <?php echo"Hello from h1";
        $varname = 43222;
        echo "$varname";
    ?>
    </h1>
    <?php 
        $connection =  mysqli_connect("localhost","root","","class_porject");
        $query = "INSERT INTO users (username,pass) VALUES ('test4','12346444') ";

        if(mysqli_query($connection, $query))
        {
            echo "Successfully created";
        }
        else
        {
            echo "Error".mysqli_error($connection);
        }
        mysqli_close($connection);
        ;
    ?>
</body>
</html>