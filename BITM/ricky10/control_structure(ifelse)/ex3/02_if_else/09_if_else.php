<?php
if (isset($_POST['name'])) {
    echo $_POST['name'];
}
else{
    echo "please Enter your Name";
}
?>


<form action="" method="post">
    <input type="text" name="name" id=""><br><br>
    <button>submit</button>
</form>