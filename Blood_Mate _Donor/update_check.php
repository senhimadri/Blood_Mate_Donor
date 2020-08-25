<?php 
session_start();
include_once('dbcon.php');
$con=connect();

$imagename=$_FILES["myimage"]["name"];

$tmpname=$_FILES["myimage"]["tmp_name"];

$folder="blog_image/".$imagename;

if ($folder=="blog_image/") {
 $image=$_SESSION['pro_pic'];
}
else{
	$image=$folder;
}



move_uploaded_file($tmpname,$folder);

$r_Id = $_SESSION['r_id'];

$f_name=$_POST['f_name'];

$l_name=$_POST['l_name'];

$full_name=$f_name." ".$l_name;

$email=$_POST['email'];

$phone=$_POST['phone'];

$gender=$_POST['gender'];

$b_group=$_POST['b_group'];

$city=$_POST['city'];

$state=$_POST['state'];

$zip=$_POST['zip'];

$password=$_POST['password'];

$dob=$_POST['dob'];





$sql="UPDATE `registration` SET f_name = '$f_name',l_name='$l_name',full_name='$full_name',pro_pic='$image',email='$email',phone='$phone',gender='$gender',b_group='$b_group',city='$city',state='$state',zip='$zip',password='$password',dob='$dob' WHERE r_id ='$r_Id'";

		if($con->query($sql))
			{
    			header("location:per_info.php");

    			 $_SESSION['f_name'] = $f_name;
       			 $_SESSION['email'] = $email;
       			 $_SESSION['full_name'] = $full_name;
       			 $_SESSION['pro_pic'] = $image;
			}
		else
			{
				header("location:update_info.php");
			}
    //echo 'Not inserted'
?>