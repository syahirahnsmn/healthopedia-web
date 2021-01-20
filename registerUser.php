<?php
    require_once('connection.php');
    session_start();
    $username = $password = $email = '';
    $id = 0;
    $edit_state = false;

    //to insert data entered into database
    if(isset($_POST['button'])){
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    }

    $password = md5($password); // Password encrypted before being stored into database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($con, $sql);
    header("Location: signupUser.php");
?>