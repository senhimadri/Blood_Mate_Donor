<?php 
session_start();
include_once('dbcon.php');
$con=connect();

$p_id = $_GET['p_id'];
$select_data = "SELECT * FROM `blog_post` where p_id =$p_id";
$run_data = mysqli_query($con,$select_data);
 $Update ="UPDATE `blog_post` SET position='2' WHERE p_id= $p_id";
        mysqli_query($con,$Update);
        header('location:requested_post.php');

?>