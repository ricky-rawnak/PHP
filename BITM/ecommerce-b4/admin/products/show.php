<?php
$approot=$_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/";
$webroot="http://localhost/Ricky/ecommerce-b4/";
include_once($approot.'vendor/autoload.php');
$servername = "localhost";

use App\Products;
$_products=new Products();
$product=$_products->show();
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

                                <h1 class="text-center mb-4">SHOW</h1>
                                <dl class="row">
                                    <dt class="col-sm-3">ID: </dt>
                                    <dd class="col-sm-9"> <?php echo $product['id'];?></dd>
                                    <dt class="col-sm-3">Title:</dt>
                                    <dd class="col-sm-9"> <?php echo $product['title'];?></dd>
                                    <dt class="col-sm-3">Detail: </dt>
                                    <dd class="col-sm-9"> <?php echo $product['detail'];?></dd>


                                    <dt class="col-sm-3">Is Active:</dt>
                                    <dd class="col-sm-9"> <?php
                                        echo $product['is_active']?"Active": "Deactivated";
                                        /*
                                        if($product['is_active']==1){
                                            echo "This product is Active.";
                                        }else{
                                            echo "This product is Inactive.";
                                        }
                                        */
                                        //echo $product['is_active'];
                                    ?></dd>

                                    <dt class="col-sm-3">Created_at: </dt>
                                    <dd class="col-sm-9"> <?php echo $product['created_at'];?></dd>

                                    <dt class="col-sm-3">Modified_at: </dt>
                                    <dd class="col-sm-9"> <?php echo $product['modified_at'];?></dd>

                                    <dt class="col-sm-3">Pictures: </dt>
                                    <dd class="col-sm-9">
                                    <?=$product['picture'];?>
                                    <img src="<?=$webroot;
                                     ?>upload/<?= $product['picture'];?>"
                                    </dd>


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
