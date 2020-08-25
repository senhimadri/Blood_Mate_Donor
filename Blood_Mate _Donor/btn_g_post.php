<?php 
session_start();
include_once('dbcon.php');
$con=connect();

$_SESSION['g6_id']= $_GET['gg_id'];
$g_id=$_SESSION['g6_id'];
 $r_id=$_SESSION['r_id'];
  header('location:group_post_cam.php');

  ?>