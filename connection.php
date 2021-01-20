<?php
    //to connect localhost to database
    $con = mysqli_connect("localhost", "root", "", "register");

    if(!$con) {
        echo "Database connection failed";
    }
?>