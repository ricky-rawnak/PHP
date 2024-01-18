<?php
// Create connection
$conn = mysqli_connect('localhost','root');

// Check connection
if ($conn) {
  echo "Connected successfully";
}else{
  echo"No connection";
}
mysqli_select_db($conn,'contactform');
$user=$_POST['user'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comments=$_POST['comments'];

$query = " insert into userdetails (user,email,phone,comments)

values('$user','$email','$phone','$comments')"; 

echo "$query";

mysqli_query($conn,$query);

header('location:index.php');

?> 