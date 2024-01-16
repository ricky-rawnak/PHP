<?php
$_id =$_POST['id'];
$_title = $_POST['title'];
$_link = $_POST['link'];


//Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `brands` SET `title`=:title,`link`=:link WHERE `brands`.id = :id;";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':link', $_link);

$result = $stmt->execute();

header("location:index.php");










