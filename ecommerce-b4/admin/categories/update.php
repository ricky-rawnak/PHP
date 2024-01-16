<?php
$_id =$_POST['id'];
$_name = $_POST['name'];
$_link = $_POST['link'];


//Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query="UPDATE `categories` SET `name`=:name,`link`=:link WHERE `categories`.`id` = :id";



$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':link', $_link);

$result = $stmt->execute();

header("location:index.php");










