<?php
require_once "Header Footer/headerfooter.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact page</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/Contactstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


</head>
<body>

<?php
header_code();
?>
<!-- ****************************HEADER ENDS HERE*****************************-->



<div class ="container">
    <h1 class="text-center "> GET IN TOUCH WITH US! <i class="fas fa-phone"></i>   </h1>
    <h3  class="text-center"> We're here to help! find us on the map <i class="fas fa-map-pin "></i> or Email us at info@downtownfoodies.pk or call us on 042-111-119-688
        <i class="fas fa-envelope-open-text"></i></h3>


</div>
<div class="text">
    <h2> Or tell us by sending us a message <i class="fas fa-comments"></i>   </h2>

</div>

<div class="col-lg-6 d-none d-sm-block map_container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.616123601826!2d74.26573642537555!3d31.446915973919346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919017432b1835b%3A0xe396992a5b05891c!2sUniversity+of+Central+Punjab!5e0!3m2!1sen!2s!4v1542485280139" width="50%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="row">

    <div class="form_container col-lg-5 col-md-6 col-sm-12 col-xs-12" >

        <form class="contact_form" >
            <h4 > SEND US A MESSAGE</h4>
            <input class="contact_input" type="text" name="client_name" placeholder="Name">
            <input class="contact_input" type="email" name="client_email" placeholder="Email">
            <input class="contact_input" type="text" name="client_number" placeholder="Number">
            <textarea class="contact_text_area" placeholder="Messsage"></textarea>
            <input class="button" type="submit" name="submit" value="Send Message">
        </form>
    </div>

</div>

<?php
footer_code();
?>



</body>
</html>

