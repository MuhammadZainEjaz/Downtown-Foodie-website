
<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
    <meta charset="UTF-8">
    <title>ADD</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>



        form{
            padding: 40px;
            font-size: 20px;


        }
        h1{
            font-size: 40px;
            padding: 30px;

        }

        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<form action="add.php" method="post">
    <h1>Update</h1>

    ID:<input type="text" name="user">
    Name:<input type="text" name="user">
    Email:<input type="mail" name="mail">
    Password:<input type="password" name="pass">
    <input type="submit" name="submit" value="enter">
</form>
</body>
</html>
