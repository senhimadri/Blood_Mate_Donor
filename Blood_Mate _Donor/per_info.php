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
    
        
          <div class="row">
    
            <div class="col-sm-4">

              <img src="<?=$prd['pro_pic']?>" class="img-responsive img-thamnil" style="width:200px; height: 200px; margin-left: 30px;" align="center">
              
            </div>
            <div class="col-sm-8">
              <h2 class="well"><?=$prd['full_name']?></h2>
              <h3><?=$prd['email']?></h3>
              <h4>Phone: <?=$prd['phone']?></h4>

             </div>

    
          </div>
          <div class="row" style="margin-top: 20px;">
            <div class="col-sm-6">
              
              <table class="table table-striped" style="">
  
  <tbody>
    <tr>
      
      <td><h4>Gender</h4></td>
      <td><h4>: <?=$prd['gender']?></h4></td>
    
    </tr>
    <tr>
     
      <td><h4>Blood Group</h4></td>
      <td><h4>: <?=$prd['b_group']?></h4></td>
   
    </tr>
    <tr>
    
      <td><h4>Date of Birth</h4></td>
      <td><h4>: <?=$prd['dob']?></h4></td>

    </tr>
    <tr>
    
      <td><h4>Password</h4></td>
      <td><h4>: <?=$prd['password']?></h4></td>

    </tr>
  </tbody>
</table>
            </div>

<div class="col-sm-6">
              
              <table class="table table-striped" style="">
  
  <tbody>
    <tr>
      
      <td><h4><b>Address</b></h4></td>
      <td><h4></h4></td>
     
    
    </tr>
    <tr>
     
      <td><h4>City</h4></td>
      <td><h4>: <?=$prd['city']?></h4></td>
   
    </tr>
    <tr>
    
      <td><h4>State</h4></td>
      <td><h4>: <?=$prd['state']?></h4></td>

    </tr>
    <tr>
    
      <td><h4>Zip Code</h4></td>
      <td><h4>: <?=$prd['zip']?></h4></td>

    </tr>
  </tbody>
</table>
            </div>
          </div>



      
        </div>
      <?php } ?>
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
