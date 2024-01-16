<?php
$webroot="http://localhost/Ricky/backend/";
$_id = $_GET['id'];
//Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `banners` where id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();

$banner = $stmt->fetch();
//var_dump($banner);

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>List</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-4">Banners List</h1>



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
                    <div class="col-sm-6">
                        <h1 class="text-center mb-4">SHOW</h1>
                        <dl class="row">
                            <dt class="col-sm-3">ID: </dt>
                            <dd class="col-sm-9"> <?php echo $banner['id'];?></dd>
                            <dt class="col-sm-3">Title</dt>
                            <dd class="col-sm-9"> <?php echo $banner['title'];?></dd>
                            <dt class="col-sm-3">Link: </dt>
                            <dd class="col-sm-9"> <?php echo $banner['link'];?></dd>

                            <dt class="col-sm-3">Is Active:</dt>
                            <dd class="col-sm-9"> <?php
                                echo $banner['is_active']?"Active": "Deactivated";
                                /*
                                if($product['is_active']==1){
                                    echo "This product is Active.";
                                }else{
                                    echo "This product is Inactive.";
                                }
                                */
                                //echo $product['is_active'];
                                ?></dd>

                            <dt class="col-sm-3">Pictures: </dt>
                            <dd class="col-sm-9">
                                <?=$banner['picture'];?>
                                <img src="<?=$webroot;
                                ?>upload/<?= $banner['picture'];?>"
                            </dd>


                        </dl>
                    </div>

                </div>

            </div>
</section>




<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>









