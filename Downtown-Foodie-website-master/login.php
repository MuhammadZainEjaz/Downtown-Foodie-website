<?php
require_once "Header Footer/headerfooter.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


</head>
<?php
header_code();
?>

<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form id="log">
                <h1>Login</h1>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email">

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="Password" class="form-control" placeholder="Password">

                </div>
                <div class="checkbox">
                    <label> <input type="checkbox"> Remember me </label>
                </div>
                <div><a href="reset.php"> Forget Password?</a><br>
                </div><br>
                <button type="submit" class="btn btn-success "> Sign in </button><br><br>
                <button class="social facebook">Login with Facebook </button>


            </form>
        </div>

        <!-- <div class="col-md-4 col-sm-4 col-xs-12"></div>
 -->

    </div>
</div>
<?php
footer_code();
?>
</body>
</html>

