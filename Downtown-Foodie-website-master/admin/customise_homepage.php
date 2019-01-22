<?php
    require_once "../server/connectDB.php";
    require_once "../Header Footer/headerfooter.php";
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
    if(isset($_POST['update'])){
        $header = $_POST['header'];
        $menu = $_POST['menu'];
        $whatsnew = $_POST['whatsnew'];
        $query = "update homepage set image_id = '$header' where homepage.post_id = 1";
        mysqli_query($connection, $query);
        $query = "update homepage set image_id = '$menu' where homepage.post_id = 2";
        mysqli_query($connection, $query);
        $query = "update homepage set image_id = '$whatsnew' where homepage.post_id = 3";
        mysqli_query($connection, $query);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customize homepage</title>
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
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Customize </span> HomePage </h1>
    <form method="post">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="header" class="float-md-right"> Header <span class="d-sm-none d-md-inline">Image:</span> </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <select class="form-control" id="header" name="header">
                        <option value="0">Select Image</option>
                        <?php
                            get_images_from_database();
                            ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="menu" class="float-md-right"> Menu <span class="d-sm-none d-md-inline">Image:</span> </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <select class="form-control" id="menu" name="menu">
                        <option value="0">Select Image</option>
                        <?php
                        get_images_from_database();
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="whatsnew" class="float-md-right"> WhatsNew <span class="d-sm-none d-md-inline"> Image:</span> </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <select class="form-control" id="whatsnew" name="whatsnew">
                        <option value="0">Select Image</option>
                        <?php
                        get_images_from_database();
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="update" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Update Now </button>
            </div>
        </div>
    </form>
</div>
<?php
footer_code();
?>
</body>
</html>