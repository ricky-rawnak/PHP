<?php
$_id =$_POST['id'];
$_title = $_POST['title'];
$_detail = $_POST['detail'];

//Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `products` SET `title`=:title,`detail`=:detail WHERE `products`.id = :id;";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':detail', $_detail);

$result = $stmt->execute();

header("location:index.php");










