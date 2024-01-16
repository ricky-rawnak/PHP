<?php

include_once ($_SERVER['DOCUMENT_ROOT']."/Ricky/ecommerce-b4/config.php");

use App\Banners;
$_banners=new Banners();
$banner=$_banners->edit();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-4">Add New Banners</h1>
                <form method="post" action="update.php" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="inputTitle" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input
                                    type="hidden"
                                    class="form-control"
                                    id="inputId"
                                    name="id"
                                    value="<?php echo $banner['id']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                id="inputTitle"
                                name="title"
                                value="<?php echo $banner['title']?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                id="link"
                                name="link"
                                value="<?php echo $banner['link']?>">
                        </div>
                    </div>


                    <div class="mb-3 row form-check">


                        <div class="col-sm-10">
                            <?php
                            if($banner['is_active']==0)
                            { ?>
                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="inputIsActive"
                                        name="is_active"
                                        value="1">
                                <?php
                            }
                            else{

                                ?>

                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="inputIsActive"
                                        name="is_active"
                                        checked
                                        value="1">
                            <?php }
                            ?>
                        </div>
                        <label for="inputIsActive" class="col-sm-2 form-check-label">Is Active</label>

                        <div class="mb-3 row">

                            <label for="formFile" class="col-sm-2 col-form-label">Picture</label>

                            <div class="col-sm-10">

                                <input class="form-control"
                                       type="file"
                                       id="formFile"
                                       name="picture"
                                       value="<?php echo $banner['picture']?>">
                                <img src="<?=$webroot;
                                ?>upload/<?= $banner['picture'];?>">
                                <input
                                        type="hidden"
                                        name="old_picture"
                                        value="<?php echo $banner['picture']?>">
                                >
                            </div>
                        </div>




                    <button type="submit" class="btn btn-info">update</button>

                </form>
            </div>
        </div>

    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
