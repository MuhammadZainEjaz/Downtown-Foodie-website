<?php
require_once "Header Footer/headerfooter.php";
require_once "server/connectDB.php";

if (isset($_POST["signup_submit"])){
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password1 = $_POST["password2"];
    if ($password === $password1){
        $query = "insert into userpas (user_id, user_name, user_email, user_pass) values (NULL, '$name', '$email', '$password')";
        mysqli_query($connection, $query);
    }
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>sign up</title>
    <link rel="stylesheet" href="css/styleSignup.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        * {

            /*color: #fff;*/
        }
    </style>
</head>

<body>
<?php
header_code();
?>

<div id="login-box">
    <div class="left">
        <h1>Sign up</h1>

        <form action="SignUp.php" method="post">
            <input type="text" name="username" placeholder="Enter you name" />
            <input type="text" name="email" placeholder="Enter your email address" />
            <input type="password" name="password" placeholder="Enter password" />
            <input type="password" name="password2" placeholder="Retype password" />
            <input type="submit" name="signup_submit" value="Submit" />
        </form>
    </div>

    <div class="right">
        <span class="loginwith">Sign in with<br />social network</span>

        <button class="social-signin facebook">Log in with facebook</button>
        <!--<button class="social-signin twitter">Log in with Twitter</button>
        <button class="social-signin google">Log in with Google+</button>-->
    </div>
    <div class="or">OR</div>
</div>

<?php
footer_code();
?>
</body>

</html>

