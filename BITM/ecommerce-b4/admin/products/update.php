<?php
$_id =$_POST['id'];
$_title = $_POST['title'];
$_detail = $_POST['detail'];

if(array_key_exists("is_active",$_POST)){

    $_is_active=$_POST['is_active'];

}else{
    $_is_active=0;
}
$_modified_at= date("Y-m-d h-i-s", time());

//Connection to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `products` SET `title`=:title,`detail`=:detail,`is_active`=:is_active, `modified_at`=:modified_at WHERE `products`.id = :id;";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':detail', $_detail);
$stmt->bindParam(':is_active', $_is_active);
$stmt->bindParam(':modified_at', $_modified_at);

$result = $stmt->execute();

header("location:index.php");










