<!DOCTYPE html>
<html>
<?php include_once('partial/head.php'); ?>
<body>



<?php include_once('partial/navigation.php'); ?>

<div class="container">

	<div class="row" style="margin-top: 80px;">
		
		<div class="col-sm-4">

			<h1>Registration</h1>
		</div>

		<div class="col-sm-8">
<form action="loginChecker.php" method="post">
	<h3 class="well">Login From</h3>
  <div class="form-row">
    <div class="col-sm-12" style="margin-top: 0px;">
      <label for="validationDefault01"><h4>Enter Your Email</h4></label>
      <input name="l_email" type="text" class="form-control" id="l_email" placeholder="Enter Your Email" value="" required>

    </div>
    <div class="col-sm-12" style="margin-top: 10px;">
      <label for="validationDefault02"><h4>Enter Your Password</h4></label>
      <input name="l_password" type="Password" class="form-control" id="l_password" placeholder="" value="" required>
    </div> 
     
<div class="col-sm-12" style="margin-top: 10px;">
  <button class="btn btn-primary" type="submit">Sign In</button>
  </div>
</form>
			
		</div>
	</div>

	

	

</body>

<footer>
	
</footer>
</html>