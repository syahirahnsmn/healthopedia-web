<?php

     $workoutactivity = "";
     $duration = "";
     $cycle = "";
     $date = "";
     $time = "";
     $id = 0;
     $edit_state = false;

     //connect to database
     $db = mysqli_connect('localhost', 'root', '', 'register');

     //if save button is clicked
     if(isset($_POST['save']))
     {
         $workoutactivity = $_POST['workoutactivity'];
         $duration = $_POST['duration'];
         $cycle = $_POST['cycle'];
         $date = $_POST['date'];
         $time = $_POST['time'];

         $query = "INSERT INTO workout (workoutactivity, duration, cycle, date, time) VALUES ('$workoutactivity', '$duration', '$cycle', '$date', '$time')";
         mysqli_query($db, $query);
         $_SESSION['msg'] = "Record had been saved";
         header('location: Workout.php');
     }

     //update records
     if(isset($_POST['update'])){
        $workoutactivity = $_POST['workoutactivity'];
        $duration = $_POST['duration'];
        $cycle = $_POST['cycle'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $id = $_POST['id'];

        $_SESSION['msg'] = "Record has been updated";
        mysqli_query($db, "UPDATE workout SET workoutactivity='$workoutactivity', duration='$duration', cycle='$cycle', date='$date', time='$time' WHERE id = $id");
        header('Location: Workout.php');
     }

    //delete records
    if(isset($_GET['del'])){
        $id = $_GET['del'];

        mysqli_query($db, "DELETE FROM workout WHERE id=$id");
        $_SESSION['msg'] = "Record has been deleted";
        header('location: Workout.php');
    }

     //retrieve records
     $result = mysqli_query($db, "SELECT * FROM workout");
?>