<?php
    require_once "server/connectDB.php";
    require_once "Header Footer/headerfooter.php";

    function get_image_address_from_database($number){
        global $connection;
        $query = "select image_id from homepage where post_id=".$number;
        $image_id = mysqli_fetch_assoc(mysqli_query($connection, $query));
        $query = "select image_address from images where image_id=".$image_id['image_id'];
        $image_address = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return $image_address;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomePage</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylesHomepage.php">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<?php
 header_code();
?>
<div class="main-header">
    <div class="container">
        <h1> DownTown Foodies </h1>
        <h2> Taste you will never forget.</h2>
    </div>
</div>

<div class="clr"></div>

<div id="primaryCallsToAction">
    <div class="menuArtical">
        <h2> MENU </h2>
        <p>
            Eating out can be a very pleasurable experience. Having dinner with a friend, eating a romantic meal while on a
            date or celebrating some special event with a party at a restaurant are all things we enjoy doing.
            That's why have something special for you and for your special ones.
            Try Our dishes  and I gauarantee you that you will never forget our taste.
            <span>Our rates are not high so its light on pocket.</span> So come to DownTown Foodies to dine In or Take away.
        </p>
    </div>
    <div class="menuActionCenter">
        <h3> Check Out our MENU</h3>
        <form action="#">
            <input type="submit" value="MENU" class="buttons">
        </form>
    </div>
    <div class="clr"></div>
</div>

<div class="supportingData">
    <div class="section">
        <div class="register">
            <div class="registerparagraph">
                <p> Not yet Registered? Register Now for <span> FREE </span>  </p>
            </div>
            <div class="registerbutton">
                <form action="SignUp.php">
                    <input type="submit" value="Register" class="buttons-register">
                </form>
            </div>
            <div class="clr"></div>
        </div>

        <div class="clr"></div>

        <div class="homePage-video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UqyD2PgOw9Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="">
            </iframe>
        </div>
    </div>

    <div class="whats-new">
        <?php
            echo "<img src='images/".get_image_address_from_database(3)['image_address']."'>"
        ?>
    </div>
    <div class="clr"></div>
</div>
<div class="clr"></div>
<?php
 footer_code();
?>
</body>
</html>
