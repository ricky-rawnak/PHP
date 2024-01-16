<?php



include_once ($_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/config.php");

use App\Banners; // Products from src
$_banners=new Banners();
$banner=$_banners->update();










