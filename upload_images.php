<?php
require_once "../server/connectDB.php";
    require_once "../Header Footer/headerfooter.php";
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

function get_images_from_database(){
    global $connection;
    $query = "select * from images";
    $results = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($results)){
        $address = $row['image_address'];
        $id = $row['image_id'];
        echo "<option value='$id'>$address</option>";
    }
}

    if(isset($_POST["delete_image_submit"])){
        global $connection;
        $image_id = $_POST["delete_image"];
        $query = "select * from homepage";
        $results = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($results)){
            $image_id_homepage = $row["image_id"];
            if ($image_id === $image_id_homepage){
                echo "Image to be deleted is in use";
                break;
            }
        }
        $query = "delete from images where images.image_id = $image_id";
        mysqli_query($connection, $query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Images</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
            color: #848181;
        }
        body{
            background-color: #191818;
        }
    </style>
</head>
<body>
<?php
header_code();
?>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> Upload New <span class="d-none d-sm-inline">  Images </span> </h1>
    <form action="upload_images.php" method="post" enctype="multipart/form-data">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="new_img" class="float-md-right"> New <span class="d-sm-none d-md-inline">Image:</span> </label>
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
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> Delete <span class="d-none d-sm-inline">  Images </span> </h1>
    <form action="upload_images.php" method="post" enctype="multipart/form-data">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="delete_image" class="float-md-right"> Image to Delete:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                </div>
                <select class="form-control" id="delete_image" name="delete_image">
                    <option value="0">Select Image</option>
                    <?php
                    get_images_from_database();
                    ?>
                </select>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="delete_image_submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Delete </button>
            </div>
        </div>
    </form>
</div>
<?php
footer_code();
?>
</body>
</html>
