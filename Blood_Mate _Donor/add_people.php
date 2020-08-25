<?php 
session_start();
include_once('dbcon.php');
$con=connect();

 $_SESSION['g_id']= $_GET['g_id'];
 $g_id=$_SESSION['g_id'];
 $r_id=$_SESSION['r_id'];
$sqll = "SELECT * FROM `group_member` 
			WHERE g_id='$g_id' AND r_id='$r_id' ";
	$con= connect();
	$result = $con->query($sqll);
	if($result->num_rows ==0){

$sql = "INSERT INTO group_member (`g_id`,`r_id`,`role`,`accept`) VALUES ('$g_id','$r_id','1','1')";

      mysqli_query($con,$sql);
        header('location:add_by_search.php');

    }

    else{
    	header('location:add_by_search.php');
    }

    $_SESSION['g_id']=$g_id;

?>