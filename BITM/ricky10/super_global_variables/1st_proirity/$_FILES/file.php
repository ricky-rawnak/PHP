<?php

echo "<p>File Name: ".$_FILES['my_files']['name']."</p>";
echo "<p>File type: ".$_FILES['my_files']['type']."</p>";
echo "<p>File tmp Location: ".$_FILES['my_files']['tmp_name']."</p>";
echo "<p>File size: ".$_FILES['my_files']['size']/1024/1024,"mb"."</p>";


if($_FILES['my_files']['type'] == "application/octet-stream"){
    echo "Thank you for uploading right files.";
}else{
    echo "You have uploaded wrong file.";

}

echo "<br>";

$target = $_FILES['my_files']['tmp_name'];

$destination = 'uploads/'.$_FILES['my_files']['name'];

$is_file_moved = move_uploaded_file($target, $destination);

if($is_file_moved){
    echo "<p> File has been moved successfully.</p>";
}else{
    echo "<p> File has not been moved.</p>";
}












die();
echo "<br>";
echo "<pre>";
print_r($_FILES);
echo "</pre>";
