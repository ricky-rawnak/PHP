<?php
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>crud</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
            <h1 class="text-center">Add New Products</h1>
<form method="post" action="store.php" enctype="multipart/form-data">

                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input
                                type="text"
                                class="form-control"
                                id="inputTitle"
                                name="title"
                                value="">
                    </div>
                </div>
                <div class="mb-3 row">
        <label for="inputDetail" class="col-sm-2 col-form-label">Detail</label>
        <div class="col-sm-10">
            <input
                    type="text"
                    class="form-control"
                    id="inputDetail"
                    name="detail"
                    value="">
        </div>
    </div>

    <div class="mb-3 row">

        <label for="formFile" class="col-sm-2 col-form-label">Picture</label>

        <div class="col-sm-10">

            <input class="form-control"
                   type="file"
                   id="formFile"
                   name="picture"
                   value="">
        </div>
    </div>

    <div class="mb-3 row form-check">


        <div class="col-sm-10">
            <input
                    type="checkbox"
                    class="form-check-input"
                    id="inputIsActive"
                    name="is_active"
                    value="1">
        </div>
            <label for="inputIsActive" class="col-sm-2 form-check-label">Is Active</label>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
