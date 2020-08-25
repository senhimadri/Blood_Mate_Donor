<?php 
session_start();
include_once('dbcon.php');
$con=connect();

$_SESSION['ggg_id']= $_GET['g_id'];
$g_id=$_SESSION['ggg_id'];
 $r_id=$_SESSION['r_id'];
  header('location:see_group_member.php');

  ?>