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
    public $id=null;
    public $title=null;
    public $detail=null;

    public $conn=null;



    public function __construct()
    {

        $servername = "localhost";
        $username = "root";
        $password = "";

        $this->conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username,$password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function store(){


        $approot= $_SERVER['DOCUMENT_ROOT'].'/Ricky/ecommerce-b4/';

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

        $query="INSERT INTO `products` (`title`,`detail`,`picture`,`is_active`,`created_at`) VALUES (:title,:detail,:picture,:is_active,:created_at)";

        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(':title',$_title);
        $stmt->bindParam(':detail',$_detail);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':created_at',$_created_at);
        $result= $stmt->execute();

        header("location:index.php");
    }


 public function index(){


     $query="SELECT * FROM `products` WHERE is_deleted=0";
     $stmt=$this->conn->prepare($query);
     $result= $stmt->execute();

     $products= $stmt->fetchAll();
     return $products;
 }


 public function show(){

     $_id=$_GET['id'];



     $query="SELECT * FROM `products` where id=:id";
     $stmt=$this->conn->prepare($query);

     $stmt->bindParam(':id',$_id);
     $result= $stmt->execute();
     $product= $stmt->fetch();
     return $product;
 }


 public function edit(){

    // $approot=$_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/";
     $_id =$_GET['id'];


     $query = "SELECT * FROM `products` where id = :id";
     $stmt = $this->conn->prepare($query);
     $stmt->bindParam(':id', $_id);
     $result = $stmt->execute();

     $product = $stmt->fetch();
     return $product;
 }



 public function delete(){
     $_id=$_GET['id'];

     $query="DELETE FROM products where id=:id";
     $stmt=$this->conn->prepare($query);

     $stmt->bindParam(':id',$_id);
     $result= $stmt->execute();
     $products= $stmt->fetch();

     if($result){
         $_SESSION['message']="Product deleted";
     }
     else{
         $_SESSION['message']="Product not deleted";
     }
     header("location:index.php");


 }


 public function update(){

     $_id =$_POST['id'];


     $approot=$_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/";

     if($_FILES['picture']['name']!="") {

         $file_name = "IMG_" . time() . "_" . $_FILES['picture']['name'];
         $target = $_FILES['picture']['tmp_name'];
         $destination = $approot . 'upload/' . $file_name;

         $is_file_moved = move_uploaded_file($target, $destination);
         if ($is_file_moved) {
             $_picture = $file_name;
         } else {
             $_picture = null;
         }
     }else{
             $_picture=$_POST['old_picture'];

     }
     $_title = $_POST['title'];
     $_detail = $_POST['detail'];

     if(array_key_exists("is_active",$_POST)){

         $_is_active=$_POST['is_active'];

     }else{
         $_is_active=0;
     }
     $_modified_at= date("Y-m-d h-i-s", time());


     $query = "UPDATE `products` SET `title`=:title,`detail`=:detail,`is_active`=:is_active, `modified_at`=:modified_at,`picture`=:picture WHERE `products`.id = :id";

     $stmt = $this->conn->prepare($query);
     $stmt->bindParam(':id', $_id);
     $stmt->bindParam(':title', $_title);
     $stmt->bindParam(':detail', $_detail);
     $stmt->bindParam(':is_active', $_is_active);
     $stmt->bindParam(':modified_at', $_modified_at);
     $stmt->bindParam(':picture', $_picture);

     $result = $stmt->execute();

     header("location:index.php");
 }


public function trash(){
    $_id=$_GET['id'];
    $_is_deleted=1;


    $query = "UPDATE `products` SET `is_deleted`=:is_deleted WHERE `products`.id = :id";

    $stmt=$this->conn->prepare($query);

    $stmt->bindParam(':id',$_id);
    $stmt->bindParam(':is_deleted',$_is_deleted);
    $result= $stmt->execute();
    $products= $stmt->fetch();

    if($result){
        $_SESSION['message']="Product deleted";
    }
    else{
        $_SESSION['message']="Product not deleted";
    }
    header("location:index.php");

}


public function trash_index(){


    $query="SELECT * FROM `products` WHERE is_deleted=1";
    $stmt=$this->conn->prepare($query);
    $result= $stmt->execute();

    $products= $stmt->fetchAll();
    return $products;

}


public function restore(){
    $_id=$_GET['id'];
    $_is_deleted=0;


    $query = "UPDATE `products` SET `is_deleted`=:is_deleted WHERE `products`.id = :id";

    $stmt=$this->conn->prepare($query);

    $stmt->bindParam(':id',$_id);
    $stmt->bindParam(':is_deleted',$_is_deleted);
    $result= $stmt->execute();
    $products= $stmt->fetch();

    if($result){
        $_SESSION['message']="Product deleted";
    }
    else{
        $_SESSION['message']="Product not deleted";
    }
    header("location:index.php");

}
/*
private function upload(){
    $approot=$_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/";
    $_picture=null;

    if($_FILES['picture']['name']!=""){


        $file_name="IMG_".time()."_".$_FILES['picture']['name'];
        $target=$_FILES['picture']['tmp_name'];
        $destination=$approot.'upload/'.$file_name;
        $is_file_moved=move_uploaded_file($target,$destination);
        if($is_file_moved){
            $_picture=$file_name;
        }

    } else{
        if($_POST['old_picture']){
            $_picture=$_POST['old_picture'];
        }
    }
    return $_picture;
}
*/
}