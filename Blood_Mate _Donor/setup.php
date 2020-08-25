<?php
//Connect to database server
include_once('dbcon.php');
$con = connect(true);
//Create Database
$sql = "CREATE DATABASE DB_blood_mate";
if($con->query($sql)){
	echo 'Database Created Successfully<br>';
}

//Connect to database
$con = connect();
if($con->connect_error){
    die("connection failed:" .$con->connect_error);
}

//Create Users Table
$sql = "CREATE TABLE `registration` (
  `r_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `pro_pic` varchar(500) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `b_group` varchar(15) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT '0' COMMENT '0=Donor,1=Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;";
if($con->query($sql)){
	echo 'registration table created Successfully<br>';
}
//inserting data

$sql = "INSERT INTO `registration` (`f_name`, `l_name`, `full_name`, `pro_pic`, `email`, `phone`, `gender`, `b_group`, `city`, `state`, `zip`, `password`, `dob`, `role`) VALUES
('Admin', 'Panal', 'Admin Panal', '', 'admin@g.com', '01760907933', 'Male', 'O(+)positive', 'Joypara', 'Dhaka', '1330', 'admin', '0000-00-00', 1);";
if($con->query($sql)){
  echo 'Admin user created Successfully<br>
  Email: admin@g.com<br>Password:admin';

}

//Create Forum Table
$sql = "CREATE TABLE `groups` (
  `g_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `g_name` varchar(200) NOT NULL,
  `g_cover` varchar(500) NOT NULL,
  `g_description` text NOT NULL,
  `g_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_rid` int(11) NOT NULL,
  `creator_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;
";
if($con->query($sql)){
	echo 'groups table created Successfully<br>';
}

//Create Comment Table
$sql = "CREATE TABLE `group_member` (
  `g_m_id` int(50) AUTO_INCREMENT PRIMARY KEY,
  `g_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `role` int(1) NOT NULL,
  `accept` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;";
if($con->query($sql)){
	echo 'group_member table created Successfully<br>';
}


//Create Donation Table
$sql = "CREATE TABLE `group_post` (
  `g_p_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `g_id` int(11) NOT NULL,
  `p_r_id` int(11) NOT NULL,
  `g_p_title` text NOT NULL,
  `g_p_content` text NOT NULL,
  `g_p_pic` varchar(500) NOT NULL,
  `p_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32;";
if($con->query($sql)){
	echo 'group_post table created Successfully<br>';
}
$sql = "CREATE TABLE `blog_post` (
  `p_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `p_title` text NOT NULL,
  `p_content` text NOT NULL,
  `p_type` varchar(15) NOT NULL,
  `image` varchar(500) NOT NULL,
  `p_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `r_id` int(11) NOT NULL,
  `position` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;";
if($con->query($sql)){
  echo 'visitor table created Successfully<br>';
}
//Insert into users table



//Insert into product table


?>
<a href="index.php">Home Page</a>