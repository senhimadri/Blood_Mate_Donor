<?php 
session_start();
include_once('dbcon.php');
$con=connect();

$p_id = $_GET['p_id'];
$select_data = "SELECT * FROM `blog_post` where p_id =$p_id";
$run_data = mysqli_query($con,$select_data);
 $Update ="DELETE FROM `blog_post` WHERE p_id= $p_id";
        mysqli_query($con,$Update);
        header('location:uploaded_post.php');

?>

