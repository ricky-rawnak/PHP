<?php
$approot=$_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/";
$webroot="http://localhost/Ricky/ecommerce-b4/";
include_once($approot.'vendor/autoload.php');
$servername = "localhost";

use App\Products;
$_products=new Products();
$products=$_products->index();




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Product</title>
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
        <a class="nav-link" href="trash_index.php">Trashed Items</a>
    </li>


</ul>
 


<!---------TABLES------------>

            <table class="table table-bordered">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Title</th>
        <th scope="col">Detail</th>
        <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

 <?php 
 foreach($products as $product):
    ?>
    <tr>
        <td>
            <?php echo $product['id'];
            ?>
        </td>
        <td>
            <?php echo $product['title'];
            ?>
        </td>
        <td>
            <?php echo $product['detail']; ?>
        </td>
        <td>
            <?php echo $product['is_active']? "Active ": "Deactivated";?>
        </td>

        <td>
                                    <a href="show.php?id=<?php echo $product['id'];?>"><button type="button" class="btn btn-info">Show</button></a>
            <a href="edit.php?id=<?php echo $product['id'];?>"><button type="button" class="btn btn-dark">Edit</button></a>


            <a href="trash.php?id=<?php echo $product['id'];?>"<button type="button" class="btn btn-warning">Trash</button></a>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
