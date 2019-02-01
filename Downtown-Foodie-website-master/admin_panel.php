<?php
/*require_once "connection.php";*/
require_once "Header Footer/headerfooter.php";
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
if (!isset($_SESSION['admin_email'])){
    die("You are not admin.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/admin_panel.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>Admin Panel</title>
<!--    <style>-->
<!--        h3{-->
<!--            font-size: 30px;-->
<!--        }-->
<!---->
<!--        body{-->
<!--            background:darkslategray;-->
<!--            background-repeat: no-repeat;-->
<!--        }-->
<!--        li{-->
<!--            font-size: 25px;-->
<!--            color:Black;-->
<!--        }-->
<!--        img{-->
<!--            vertical-align: middle;-->
<!--            height:100px;-->
<!--            border-style:none;-->
<!--        }-->
<!---->
<!--        * {-->
<!--            font-family: 'Old Standard TT', serif;-->
<!--        }-->
<!--    </style>-->
</head>
<?php
header_code();
?>

<body>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><img src="images/admin.png"> Admin Panel</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="admin/customise_homepage.php">
                    <i class="fas fa-plus"></i> Customize Homepage
                </a>
            </li>
            <li>
                <a href="admin/upload_images.php">
                    <i class="fas fa-sitemap"></i> Manage Images
                </a>
            </li>
            <li>
                <a href="login.php">
                    <i class="fa fa-sign-out-alt"></i> Admin logout</a>
            </li>
        </ul>

    </nav>


</div>

<?php
footer_code();
?>
</body>
</html>



