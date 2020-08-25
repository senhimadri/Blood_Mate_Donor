<?php 
session_start();
include_once('dbcon.php');
$con=connect();

$r_id = $_GET['r_id'];
$select_data = "SELECT * FROM `registration` where r_id =$r_id";
$run_data = mysqli_query($con,$select_data);
 $delete ="DELETE FROM `registration` WHERE r_id= $r_id";
        mysqli_query($con,$delete);
        header('location:all_user.php');

?>

