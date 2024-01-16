<pre>
<?php
print_r($_FILES);
if (isset($_FILES['my_file_1'])) {
    echo "<h3>File Info</h3>";
    echo "<p> File Name: " . $_FILES['my_file_1']['name'] . "</p><br>";
    echo "<p> File type: " . $_FILES['my_file_1']['type'] . "</p><br>";
    echo "<p> File Temp Location: " . $_FILES['my_file_1']['tmp_name'] . "</p><br>";
    echo "<p> File size: " . $_FILES['my_file_1']['size'] . "</p><br>";
}


?>
</pre>



<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="my_file_1"> <br><br>
    <input type="submit" name="submit">
</form>