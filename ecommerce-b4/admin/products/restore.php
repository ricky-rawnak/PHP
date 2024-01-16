<?php

include_once ($_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/config.php");

use App\Products;
$_products=new Products();
$product=$_products->restore();


?>
