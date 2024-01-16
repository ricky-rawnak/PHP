<?php
/**
 * Created by PhpStorm.
 * User: BITM PHP
 * Date: 4/5/2022
 * Time: 3:22 PM
 */

namespace App;

use PDO;
class Banners
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
    $_link=$_POST['link'];
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


    $query="INSERT INTO `banners` (`title`,`link`,`picture`,`is_active`,`created_at`) VALUES (:title,:link,:picture,:is_active,:created_at)";

    $stmt=$conn->prepare($query);
    $stmt->bindParam(':title',$_title);
    $stmt->bindParam(':link',$_link);
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



        $query="SELECT * FROM `banners` WHERE is_deleted=0";
        $stmt=$conn->prepare($query);
        $result= $stmt->execute();

        $banners= $stmt->fetchAll();
        return $banners;
    }

    public function show(){

        $_id=$_GET['id'];
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $query="SELECT * FROM `banners` where id=:id";
        $stmt=$conn->prepare($query);

        $stmt->bindParam(':id',$_id);
        $result= $stmt->execute();
        $banner= $stmt->fetch();
        return $banner;
    }

    public function edit(){

        $_id =$_GET['id'];
//Connection to database
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM `banners` where id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $result = $stmt->execute();

        $banner = $stmt->fetch();
        return $banner;
    }

    public function delete(){
        $_id=$_GET['id'];
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $query="DELETE FROM banners where id=:id";
        $stmt=$conn->prepare($query);

        $stmt->bindParam(':id',$_id);
        $result= $stmt->execute();
        $banners= $stmt->fetch();
//var_dump($products);
        if($result){
            $_SESSION['message']="Product deleted";
        }
        else{
            $_SESSION['message']="Product not deleted";
        }
        header("location:index.php");
        //return $product;

    }

    public function update(){
        $_id =$_POST['id'];
        $_title = $_POST['title'];
        $_detail = $_POST['link'];

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

        $query = "UPDATE `banners` SET `title`=:title,`link`=:link,`is_active`=:is_active, `modified_at`=:modified_at WHERE `products`.id = :id;";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':link', $_link);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':modified_at', $_modified_at);

        $result = $stmt->execute();

        header("location:index.php");
    }

    public function trash(){
        $_id=$_GET['id'];
        $_is_deleted=1;
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "UPDATE `banners` SET `is_deleted`=:is_deleted WHERE `banners`.id = :id";

        $stmt=$conn->prepare($query);

        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $result= $stmt->execute();
        $banners= $stmt->fetch();
//var_dump($products);

        header("location:index.php");

    }
    public function trash_index(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $query="SELECT * FROM `banners` WHERE is_deleted=1";
        $stmt=$conn->prepare($query);
        $result= $stmt->execute();

        $banners= $stmt->fetchAll();
        return $banners;

    }
    public function restore(){
        $_id=$_GET['id'];
        $_is_deleted=0;

        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql:host=$servername;dbname=ecommerce_seip", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "UPDATE `banners` SET `is_deleted`=:is_deleted WHERE `banners`.id = :id";

        $stmt=$conn->prepare($query);

        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $result= $stmt->execute();
        $banners= $stmt->fetch();
//var_dump($products);

        header("location:index.php");

    }

}