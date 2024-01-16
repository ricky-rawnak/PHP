<?php
//var_dump($_POST);
$_title=$_POST['title'];
$_detail=$_POST['detail'];

//echo $_title;

//connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query="INSERT INTO `products` (`title`,`detail`) VALUES (:title,:detail)";

$stmt=$conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':detail',$_detail);
$result= $stmt->execute();
//var_dump($result);
header("location:index.php");










