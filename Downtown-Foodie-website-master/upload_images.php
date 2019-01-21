<?php
require_once "../server/connectDB.php";
if (isset($_POST["upload_image"])){
    $file_name = $_FILES["new_img"]["name"];
    if ($file_name == NULL){
        echo "please Enter a valid data";
    }
    else{
        $file_tmp_name = $_FILES["new_img"]["tmp_name"];
        $destination_to_upload_file = "../images/".$file_name;
        move_uploaded_file($file_tmp_name, $destination_to_upload_file);
        $query = "insert into images (image_id, image_address) values (NULL, '$file_name')";
        mysqli_query($connection, $query);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Images</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Upload New </span> Images </h1>
    <form action="upload_images.php" method="post" enctype="multipart/form-data">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> New </span> Image:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-image"></i></div>
                    </div>
                    <input class="form-control" type="file" id="new_img" name="new_img">
                </div>
            </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="upload_image" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Upload </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
