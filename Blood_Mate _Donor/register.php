<?php 
include_once('dbcon.php');
$con=connect();

$f_name=$_POST['f_name'];

$l_name=$_POST['l_name'];

$full_name=$f_name." ".$l_name;

$email=$_POST['email'];

$b_group=$_POST['b_group'];

$password=$_POST['password'];


$sql= "INSERT INTO `registration`(`f_name`,`l_name`,`full_name`,`pro_pic`,`email`,`phone`,`gender`,`b_group`,`city`,`state`,`zip`,`password`) VALUES ('$f_name','$l_name','$full_name','register_image/Default.png','$email','Not Uploaded','Not Uploaded','$b_group','Not Uploaded','Not Uploaded','Not Uploaded','$password')";

		if($con->query($sql))
			{
    			header("location:index.php");
			}
		else
			{
				header("location:reg_from.php");
			}
    //echo 'Not inserted'
?>