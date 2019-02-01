<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

require_once "Header Footer/headerfooter.php";
require_once "server/connectDB.php";

if (isset($_POST["submit"])){
    $name = $_POST["email"];
    $pass = $_POST['pass'];
    if (\strpos($name, 'admin') == true){
        $query = "select admin_pass from admin where admin_email = '".$name."'";
        $admin = 1;
    }
    else{
        $query = "select user_pass from userpas where user_email = '".$name."'";
    }

    $user_pass = mysqli_fetch_assoc(mysqli_query($connection, $query));

    if ($admin == 1){
        if ($pass === $user_pass['admin_pass']){
            echo "<script type='text/javascript'>alert('login Successfull!');</script>";

            $_SESSION['admin_email'] = $name;
            if(!empty($_POST['remember_me'])) {
                setcookie('admin_email', $email, time() + (10 * 365 * 24 * 60 * 60));
                setcookie('admin_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
            } else {
                setcookie('admin_email','' );
                setcookie('admin_pass', '');
            }
            if ($admin == 1){
                header("refresh:0; url=admin_panel.php");
            }
            else{
                header("refresh:0; url=index.php");
            }

        }
        else{
            echo "<script type='text/javascript'>alert('login Failed!');</script>";
            header("refresh:0; url=login.php");
        }
    }
    else{
        if ($pass === $user_pass['user_pass']){
            echo "<script type='text/javascript'>alert('login Successfull!');</script>";

            $_SESSION['user_email'] = $name;
            if(!empty($_POST['remember_me'])) {
                setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
                setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
            } else {
                setcookie('user_email','' );
                setcookie('user_pass', '');
            }

            header("refresh:0; url=index.php");

        }
        else{
            echo "<script type='text/javascript'>alert('login Failed!');</script>";
            header("refresh:0; url=login.php");
        }
    }


}
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
            <form id="log" action="login.php" method="post">
                <h1>Login</h1>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="Password" name="pass" class="form-control" placeholder="Password">

                </div>
                <div class="checkbox">
                    <label> <input type="checkbox" name="remember_me"> Remember me </label>
                </div>
                <div><a href="reset.php"> Forget Password?</a><br>
                </div><br>
                <button type="submit" name="submit" class="btn btn-success "> Sign in </button><br><br>
                <button class="social facebook">Login with Facebook </button>


            </form>
        </div>

    </div>
</div>
<?php
footer_code();
?>
</body>
</html>

