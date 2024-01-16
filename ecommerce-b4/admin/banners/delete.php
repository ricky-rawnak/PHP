<?php

include_once ($_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/config.php");
use App\Banners;
$_banners=new Banners();
$banner=$_banners->delete();





