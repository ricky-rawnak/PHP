<?php
//var_dump($_POST);
$_title=$_POST['name'];
$_link=$_POST['link'];
//echo $_title;

//connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query="INSERT INTO `categories` (`name`,`link`) VALUES (:name,:link)";

$stmt=$conn->prepare($query);
$stmt->bindParam(':name',$_title);
$stmt->bindParam(':link',$_link);
$result= $stmt->execute();
var_dump($result);










