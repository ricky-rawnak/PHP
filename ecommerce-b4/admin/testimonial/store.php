<?php
//var_dump($_POST);
$_body=$_POST['body'];
$_name=$_POST['name'];
$_designation=$_POST['designation'];
//echo $_title;

//connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query="INSERT INTO `testimonial` (`body`,`name`,`designation`) VALUES (:body,:name,:designation)";

$stmt=$conn->prepare($query);
$stmt->bindParam(':body',$_body);
$stmt->bindParam(':name',$_name);
$stmt->bindParam(':designation',$_designation);
$result= $stmt->execute();
var_dump($result);










