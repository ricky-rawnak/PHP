<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/config.php");

use App\Products; // Products from src
$_products=new Products();
$product=$_products->update();









