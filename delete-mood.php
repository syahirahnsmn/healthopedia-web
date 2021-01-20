<?php
session_start();
include_once 'connect.php';
$sql = "DELETE FROM mood WHERE id='" . $_GET['id'] . "'";
if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
    header('location: Moodtracker.php');
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
?>