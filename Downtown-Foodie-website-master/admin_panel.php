<?php
/*require_once "connection.php";
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Admin Panel</title>
    <style>
        body{
            margin:0px;
            border:0px;

        }
        #header
        {
            width:100%;
            height:150px;
            background:black;
            color:white;


        }
        #sidebar
        {
            width:300px;
            height:400px;
            background:darkslategray;
            float:left;
        }
        #data
        {
            height:870px;
            background:darkslategray;
            color:White;
            font-size:60px;
            padding:70px;
            left:40%;
        }
        #admin
        {
            height:130px;
            background:white;
            border-radius: 80px;
        }
        ul  {
            padding:30px;
            font-size:25px;
            border-radius: 20px;
            color: white;

            /*border-bottom:10px black;*/
        }
        ul :hover
        {
            background:darkgrey;
            color:white;
        }

    </style>


</head>
<body>
<div id="header">
    <center>
        <img src="images/admin.png" alt="admin" id="admin"><br>
    </center>

</div>
<div id="sidebar">
    <ul>
       <a href="" Homepage<br><br>
        <!--<a href="add.php" > Add <br><br></a>

        Update<br><br>
        Manage Photos/Videos<br><br>-->
    </ul>

</div>
<div id="data">
    <center>Hello, Welcome to an Admin Panel<br>Proceed with caution.!!</center>

</div>
</body>
</html>


