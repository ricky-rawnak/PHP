<?php

include_once ($_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/config.php");

use App\Banners;

$_banners=new Banners();
$_banners->store();
/*
$approot= $_SERVER['DOCUMENT_ROOT'].'/Ricky/backend/';

$file_name="IMG_".time()."_".$_FILES['picture']['name'];

$target=$_FILES['picture']['tmp_name'];
$destination=$approot.'upload/'.$file_name;
$is_file_moved=move_uploaded_file($target,$destination);
if($is_file_moved){
    $_picture=$file_name;
}
else{
    $_picture=null;
}




//var_dump($_POST);
$_title=$_POST['title'];
$_link=$_POST['link'];


if(array_key_exists("is_active",$_POST)){

    $_is_active=$_POST['is_active'];

}else{
    $_is_active=0;
}


*/




//$_picture=$_FILES['picture']['name'];
//echo $_title;

//connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query="INSERT INTO `banners` (`title`,`link`,`picture`,`is_active`) VALUES (:title,:link,:picture,:is_active)";
$stmt=$conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':link',$_link);
$stmt->bindParam(':picture',$_picture);
$stmt->bindParam(':is_active',$_is_active);

$result= $stmt->execute();
//var_dump($result);

header("location:index.php");









