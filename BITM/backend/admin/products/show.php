<?php
$_id=$_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query="SELECT * FROM `products` where id=:id";
$stmt=$conn->prepare($query);

$stmt->bindParam(':id',$_id);
$result= $stmt->execute();
$product= $stmt->fetch();
//var_dump($products);
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Product List</title>
</head>
<body>



<section>
                    <div class="container">
                    <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-4">Product List</h1>



                <!---------------Nav----------------->
                <ul class="nav justify-content-center fs-3 mb-2">

                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Add an item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                </ul>

                        <div class="row justify-content-center">
                            <div class="col-5">
                                <dl>
                                    <dt>ID</dt>
                                    <dd> <?php echo $product['id'];?></dd>
                                    <dt>Title</dt>
                                    <dd> <?php echo $product['title'];?></dd>
                                    <dt>Detail</dt>
                                    <dd> <?php echo $product['detail'];?></dd>
                                
                                </dl>
                            </div>

                        </div>

                    </div>
                </section>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
