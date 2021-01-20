<?php
    require_once('connection.php');

    //to check if it's equal to true
    $username = $password = $password = '';
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);  
    //to check whether data entered exist in db or not
    if(mysqli_num_rows($result) > 0) {
        //to fetch selected data from mysqli
        while($row = mysqli_fetch_assoc($result)) { 
            $id = $row["id"];
            $username = $row["username"];
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
        }
        header("Location: userpage.php");
    } else {
        echo "Invalid email or password";
    }
?>