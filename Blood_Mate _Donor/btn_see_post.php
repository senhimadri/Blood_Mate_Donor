<?php 
session_start();
include_once('dbcon.php');
$con=connect();

$_SESSION['g4_id']= $_GET['g4_id'];
$g_id=$_SESSION['g4_id'];
 $r_id=$_SESSION['r_id'];
  header('location:see_group_post.php');

  ?>