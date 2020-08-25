<?php session_start(); ?>
<?php if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == true){ ?>
<!DOCTYPE html>
<html lang="en">

 <?php include_once('partial/head.php'); ?>
  <?php include_once('dbcon.php');?>

  <body>

    <!-- Navigation -->
    <?php include_once('partial/navigation.php'); ?>
    <!-- Page Content -->
    <div class="container" style="margin-top:40px;   "  >

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Sidebar Page
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
      <?php include_once('partial/sidebar.php'); ?>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4" >
<?php 
        $con = connect();
        $r_id = $_SESSION['r_id'];
      
       


      $sql = "SELECT * FROM `registration` WHERE r_id='$r_id'";
      $result = $con->query($sql);

      foreach($result AS $prd){?>        
    
<form action="update_check.php" method="POST" enctype="multipart/form-data">
  <h3 class="well">Update Your Information</h3>
  <div class="form-row">

    <div class="col-sm-4">
      <label for="validationDefault01">First name</label>
      <input name="f_name" type="text" class="form-control" id="f_name" placeholder="First name" value="<?php echo( htmlspecialchars($prd['f_name'])); ?>" required>
    </div>

    <div class="col-sm-4">
      <label for="validationDefault02">Last name</label>
      <input name="l_name" type="text" class="form-control" id="l_name" placeholder="Last name" value="<?php echo( htmlspecialchars($prd['l_name'])); ?>" required>
    </div> 

    <div class="col-sm-4">
      <label for="validationDefault01">Profile Picture</label>
      <input name="myimage" type="file" class="form-control" id="title" placeholder="" value="<?php echo( htmlspecialchars($prd['pro_pic'])); ?>" ></div>
    </div>

     <div class="col-sm-6" style="margin-top: 10px;">
      <label for="validationDefault01">Email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="@gmail.com" value="<?php echo( htmlspecialchars($prd['email'])); ?>" required>
    </div>
     <div class="col-sm-6" style="margin-top: 10px;">
      <label for="validationDefault01">Phone</label>
      <input name="phone" type="text" class="form-control" id="phone" placeholder="+880" value="<?php echo( htmlspecialchars($prd['phone'])); ?>" required>
    </div>
    <div class="col-sm-6" style="margin-top: 10px;">
<div class="form-group">
  <label for="sel1">Gender</label>
  <select name="gender" class="form-control" id="gender" value="Female">
    
    <option <?=$prd['gender'] == 'Male' ? ' selected="selected"' : '';?>>Male</option>
    <option <?=$prd['gender'] == 'Female' ? ' selected="selected"' : '';?>>Female</option>
    <option<?=$prd['gender'] == 'Other' ? ' selected="selected"' : '';?>>Other</option>
  </select>
</div>
</div>

 <div class="col-sm-6" style="margin-top: 10px;">
<div class="form-group">
  <label for="sel1">Blood Group</label>
  <select name="b_group" class="form-control" id="b_group">
  
    <option <?=$prd['b_group'] == 'O(+)positive' ? ' selected="selected"' : '';?>>O(+)positive</option>
    <option <?=$prd['b_group'] == 'O(-)negative' ? ' selected="selected"' : '';?>>O(-)negative</option>
    <option <?=$prd['b_group'] == 'A(+)positive' ? ' selected="selected"' : '';?>>A(+)positive</option>
    <option <?=$prd['b_group'] == 'A(-)negative' ? ' selected="selected"' : '';?>>A(-)negative</option>
    <option <?=$prd['b_group'] == 'B(+)positive' ? ' selected="selected"' : '';?>>B(+)positive</option>
    <option <?=$prd['b_group'] == 'B(-)negative' ? ' selected="selected"' : '';?>>B(-)negative</option>
    <option <?=$prd['b_group'] == 'AB(+)positive' ? ' selected="selected"' : '';?>>AB(+)positive</option>
    <option <?=$prd['b_group'] == 'AB(-)negative' ? ' selected="selected"' : '';?>>AB(-)negative</option>
   
 
  </select>
</div>
</div>
   <div class="col-sm-4">
      <label for="validationDefault01">City</label>
      <input name="city" type="text" class="form-control" id="city" placeholder="City " value="<?php echo( htmlspecialchars($prd['city'])); ?>" required>
    </div>
   <div class="col-sm-4">
      <label for="validationDefault01">State</label>
      <input name="state" type="text" class="form-control" id="state" placeholder="State Name" value="<?php echo( htmlspecialchars($prd['state'])); ?>" required>
    </div>
 <div class="col-sm-4">
      <label for="validationDefault01">Zip Code</label>
      <input name="zip" type="text" class="form-control" id="zip" placeholder="Zip Code" value="<?php echo( htmlspecialchars($prd['zip'])); ?>" required>
    </div>

    <div class="col-sm-6" style="margin-top: 10px;">
      <label for="validationDefault01">Password</label>
      <input name="password" type="text" class="form-control" id="password" placeholder="" value="<?php echo( htmlspecialchars($prd['password'])); ?>" required>
    </div>

    <div class="col-sm-6" style="margin-top: 10px;">
      <label for="validationDefault01">Date of Birth</label>
      <input name="dob" type="Date" class="form-control" id="password" placeholder="" value="<?php echo( htmlspecialchars($prd['dob'])); ?>" required>
    </div>
    

<div class="col-sm-12" style="margin-top: 10px;">
  <button class="btn btn-primary" type="submit">Update</button>
  </div>
</form>
    <?php } ?>
           

              
              
            </div>
          </div>



      
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php } ?>
