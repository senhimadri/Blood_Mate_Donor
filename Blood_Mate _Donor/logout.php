<?php session_start(); ?>
<?php 
	session_destroy(); 
	$_SESSION['isLoggedIn'] = false;
	header("location:index.php");

?>