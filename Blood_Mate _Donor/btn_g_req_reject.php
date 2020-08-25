<?php 
session_start();
include_once('dbcon.php');
$con=connect();

$_SESSION['gg1_id'] = $_GET['g_id'];
$g_id=$_SESSION['gg1_id'];
$r_id=$_SESSION['r_id'];

$select_data = "SELECT * FROM `group_member` where g_id =$g_id AND r_id=$r_id";
$run_data = mysqli_query($con,$select_data);
 $Update ="DELETE FROM `group_member` WHERE g_id= $g_id AND r_id=$r_id";
        mysqli_query($con,$Update);
        header('location:requested_groups.php');

?>