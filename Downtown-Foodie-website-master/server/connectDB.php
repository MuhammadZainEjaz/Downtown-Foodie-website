<?php
    $connection = mysqli_connect("localhost", "root", "", "downtown_foodies");
    if (!$connection){
        die("connection failed");
    }