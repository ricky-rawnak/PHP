<?php
/**
 * Created by PhpStorm.
 * User: BITM PHP
 * Date: 4/4/2022
 * Time: 2:29 PM
 */

namespace App;

use PDO;
class Products
{
    public function store(){


        $approot= $_SERVER['DOCUMENT_ROOT'].'/Ricky/ecommerce-b4/';


//picture
        $file_name="IMG_".time()."_".$_FILES['picture']['name'];
        $target=$_FILES['picture']['tmp_name'];
        $destination=$approot.'upload/'.$file_name;
        $is_file_moved=move_uploaded_file($target,$destination);
        if($is_file_moved){
            $_picture=$file_name;
        }
        else{
            $_picture=null;
        }




        $_title=$_POST['title'];
        $_detail=$_POST['detail'];
//YEAR-MONTH-DATE     Hour-Min-Seconds
//Y-m-d h-i-s
        $_created_at= date("Y-m-d h-i-s", time());


        if(array_key_exists("is_active",$_POST)){

            $_is_active=$_POST['is_active'];

        }else{
            $_is_active=0;
        }
//$_picture=$_FILES['picture']['name'];
//echo $_title;

//connection to database


        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $query="INSERT INTO `products` (`title`,`detail`,`picture`,`is_active`,`created_at`) VALUES (:title,:detail,:picture,:is_active,:created_at)";

        $stmt=$conn->prepare($query);
        $stmt->bindParam(':title',$_title);
        $stmt->bindParam(':detail',$_detail);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':created_at',$_created_at);
        $result= $stmt->execute();
//var_dump($result);
        header("location:index.php");

    }
 public function index(){
     //echo "ok";
     $servername="localhost";
     $username = "root";
     $password = "";

     $conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



     $query="SELECT * FROM `products` WHERE is_deleted=0";
     $stmt=$conn->prepare($query);
     $result= $stmt->execute();

     $products= $stmt->fetchAll();
     return $products;
 }

 public function show(){

     $_id=$_GET['id'];
     $servername = "localhost";
     $username = "root";
     $password = "";

     $conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


     $query="SELECT * FROM `products` where id=:id";
     $stmt=$conn->prepare($query);

     $stmt->bindParam(':id',$_id);
     $result= $stmt->execute();
     $product= $stmt->fetch();
     return $product;
 }
}