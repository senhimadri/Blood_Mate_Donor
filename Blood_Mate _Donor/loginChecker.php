<?php
include_once('dbcon.php');
include_once('init.php');
if(!isset($_SESSION['loginCounter'])){
	$_SESSION['loginCounter'] = 0;
}

if(!isset($_SESSION['passCount'])){
	$_SESSION['passCount'] = 0;
}

$flag = true;

if(isset($_POST['l_email']) && $_POST['l_email']!=''){
	$email = $_POST['l_email'];
}
else{

	$flag = false;
}

if(isset($_POST['l_password']) && $_POST['l_password']!=''){
	$password = $_POST['l_password'];
}else{
	
	$flag = false;
}

if($flag)
{
	$sql = "SELECT * FROM `registration` 
			WHERE `email`='$email'";
	$con= connect();
	$result = $con->query($sql);
	if($result->num_rows >0)
	{//if email exixt
		$sql = "SELECT * FROM `registration` 
			WHERE `email`='$email' 
			AND `password`='$password'";
			
		$result = $con->query($sql);
		if($result->num_rows >0)
		{//email and password match
			foreach($result AS $row)
			{
			
		$_SESSION['r_id'] = $row['r_id'];
        $_SESSION['f_name'] = $row['f_name'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['pro_pic'] = $row['pro_pic'];
        $_SESSION['role'] = $row['role'];
    
			}

			$_SESSION['isLoggedIn'] = true;
			header("location:index.php");
		}else{//if password not match
			$_SESSION['isLoggedIn'] = false;
			
			
		}
	}
	else{

		$_SESSION['isLoggedIn'] = false;
		$_SESSION['loginCounter'] +=1;
		//echo $_SESSION['loginCounter'];exit;
		if($_SESSION['loginCounter'] >= 3 )
		{
			setcookie("loginAttempt", true, time() + (60*5));
			
		}
		
		header("location:login_from.php?msg=Your email is wrong");
	}
	
	
}


?>