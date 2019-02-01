<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
    function header_code(){
        if (isset($_SESSION['user_email']) ||isset($_SESSION['admin_email'])){
            $status = 'LogOut';
            $href = 'logout.php';
        }
        else{
            $status = 'LogIn';
            $href = 'login.php';
        }
        echo "<header class='navigation'>".
    "<div class='navigation-left navbarLeft'>".
        "<a href='index.php'> <h3 class='navigation-left-D'> <i class='fas fa-home'></i> <span class='text-12 text-6'>DownTown Foodies</span> </h3> </a>".
    "</div>".
    "<div class='navigation-center navbarCenter'>".
        "<ul>".
            "<li> <a href='#'> <i class='fas fa-utensils'></i> <span class='text-12 text-6 text-4'>MENU </span> </a> </li>".
            "<li class='navigation-center-pipefont'> | </li>".
            "<li> <a href='aboutus.php'> <i class='fas fa-info'></i> <span class='text-12 text-6 text-4'>ABOUT </span> </a> </li>".
            "<li class='navigation-center-pipefont'> | </li>".
            "<li> <a href='Contactpage.php'> <i class='fas fa-phone'></i> <span class='text-12 text-6 text-4'>CONTACT </span></a> </li>".
            "<!--<li class='navigation-center-pipefont'> | </li>-->".
        "</ul>".
    "</div>".
    "<div class='navigation-right navbarRight'>".
        "<ul>".
            "<li> <a href='$href'> <i class='fas fa-sign-in-alt'></i> <span class='text-12  text-4'>$status</span></a></li>".
            "<li> <a href='SignUp.php' id='registerLink' class='registerLink1'> <i class='fas fa-user-plus'></i> <span class='text-12 text-4'>Register</span> </a> </li>".
        "</ul>".
    "</div>".
    "<div class='clr'> </div>".
    "</header>";
    }

    function footer_code(){
        echo "<footer id='main-footer'>".
    "<hr>".
    "<div class='footerText'>".
        "<h4> copyright ©| 2018  </h4>".
        "<h4> All rigths are reserved</h4>".
    "</div>".
    "</footer>";
    }
