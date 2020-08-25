<?php 
session_start();
include_once('dbcon.php');
$con=connect();

$g_id = $_GET['g5_id'];
$r_id= $_SESSION['r_id'];

 $sql ="DELETE FROM `group_member` WHERE r_id= '$r_id' AND g_id='$g_id'";
        mysqli_query($con,$sql);
        header('location:added_groups.php');

?>

