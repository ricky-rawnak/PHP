<?php
$_id =$_POST['id'];
$_title = $_POST['title'];
$_link = $_POST['link'];

if(array_key_exists("is_active",$_POST)){

    $_is_active=$_POST['is_active'];

}else{
    $_is_active=0;
}


//Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `banners` SET `title`=:title,`link`=:link,`is_active`=:is_active WHERE `banners`.id = :id;";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':link', $_link);
$stmt->bindParam(':is_active', $_is_active);


$result = $stmt->execute();

header("location:index.php");










