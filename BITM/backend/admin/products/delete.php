<?php
$_id=$_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query="DELETE FROM products where id=:id";
$stmt=$conn->prepare($query);

$stmt->bindParam(':id',$_id);
$result= $stmt->execute();
$pages= $stmt->fetch();
//var_dump($products);
if($result){
    $_SESSION['message']="Product deleted";
}
else{
    $_SESSION['message']="Product not deleted";
}
header("location:index.php")
?>
