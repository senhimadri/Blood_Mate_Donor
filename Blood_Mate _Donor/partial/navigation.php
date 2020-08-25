
		<nav class="navbar-default navbar-fixed-top" >
			<div class="container-fluid">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#Himm">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header" style="font-size: 20px;"><a href="index.php" class="navbar-brand"><B>Blood Mate Donor</B></a></div>

			

			<div class="collapse navbar-collapse" id="Himm" >
		<ul class="nav navbar-nav navbar-right " style="margin-right: 20px;">
			
			<li> <a href="index.php" style="color: black; font-size: 20px;">Home</a></li>
			
			<li> <a href="#" style="color: black; font-size: 20px;">About</a></li>

			<li> <a href="blog.php" style="color: black; font-size: 20px;">Blog</a></li>
		<li> <a href="search.php" style="color: black; font-size: 20px;">Search Donors</a></li>
		<li> <a href="reg_from.php" style="color: black; font-size: 20px;">Become Donor</a></li>

<?php if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == false){ ?>



			<li> <a href="login_from.php" style="color: black; font-size: 20px;">Sign In</a></li>

<?php  }else{?>

<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-size: 20px;"><?php echo $_SESSION['f_name'];?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li> <a href="profile.php" style="color: black; font-size: 15px;">Profile</a></li>
					<li> <a href="logout.php" style="color: black; font-size: 15px;">Log Out</a></li>
			
				</ul>
			</li>

 <?php }?>


			 
		</ul>
		</div>
			</div>
		</nav>