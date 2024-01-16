<?php
//Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `banners`";
$stmt = $conn->prepare($query);
$result = $stmt->execute();

$banners = $stmt->fetchAll();
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

    <title>Banners</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-4">Banners List</h1>
                <ul class="nav justify-content-center fs-3 mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Add a Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                </ul>
                <table class="table table-bordered table-hover table-striped">
                    <thead class="table-borderless thead-dark">
                    <tr>
                        <th scope="col"> ID</th>
                        <th scope="col"> Title</th>
                        <th scope="col"> Link</th>
                        <th scope="col">Status</th>
                        <th scope="col"> Action</th>
                    </tr>
                    </thead>

                    <tbody class="table-borderless ">
                    <?php

                        foreach ($banners as $banner) :
                            ?>
                            <tr>
                                <td> <?php echo $banner['id']?> </td>
                                <td><?php echo $banner['title']?></td>
                                <td><?php echo $banner['link']?></td>

                                <td>
                                    <?php echo $banner['is_active']? "Active ": "Deactivated";?>
                                </td>

                                <td>
                                    <a href="show.php?id=<?php echo $banner['id'];?>"><button type="button" class="btn btn-info">Show</button></a>
                                    <a href="edit.php?id=<?php echo $banner['id'];?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="delete.php?id=<?php echo $banner['id'];?>" onclick="return confirm('Are you sure you want to delete')"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        endforeach;

                    ?>
                    </tbody>
                </table>
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









