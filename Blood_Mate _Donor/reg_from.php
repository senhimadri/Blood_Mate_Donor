<?php session_start(); ?>
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
<form action="register.php" method="POST">
	<h3 class="well">Register as a Donor</h3>
  <div class="form-row">
    <div class="col-sm-6">
      <label for="validationDefault01">First name</label>
      <input name="f_name" type="text" class="form-control" id="f_name" placeholder="First name" value="" required>
    </div>
    <div class="col-sm-6">
      <label for="validationDefault02">Last name</label>
      <input name="l_name" type="text" class="form-control" id="l_name" placeholder="Last name" value="" required>
    </div> 
     <div class="col-sm-6" style="margin-top: 10px;">
      <label for="validationDefault01">Email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="@gmail.com" value="" required>
    </div>



 <div class="col-sm-6" style="margin-top: 10px;">
<div class="form-group">
  <label for="sel1">Blood Group</label>
  <select name="b_group" class="form-control" id="b_group">
    <option>O(+)positive</option>
    <option>O(-)negative</option>
	<option>A(+)positive</option>
    <option>A(-)negative</option>
    <option>B(+)positive</option>
    <option>B(-)negative</option>
    <option>AB(+)positive</option>
    <option>AB(-)negative</option>
  </select>
</div>
</div>

    <div class="col-sm-12" style="margin-top: 10px;">
      <label for="validationDefault01">Password</label>
      <input name="password" type="Password" class="form-control" id="password" placeholder="........" value="" required>
    </div>
    

  <div class="form-group">
  	<div class="col-sm-12" style="margin-top: 10px;">
    <div class="form-check" >
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
</div>
<div class="col-sm-12" style="margin-top: 10px;">
  <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
			
		</div>
	</div>

	
</div>

	

</body>

<footer>
	
</footer>
</html>