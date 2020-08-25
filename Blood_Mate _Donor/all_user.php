<?php session_start(); ?>
<?php if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == true){ ?>

  <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>
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

             <div class="row">
              <div class="col-sm-12">
                <h2 class="well">All Users</h2>
              </div>

              <?php 
      $con = connect();
    
       $sql = "SELECT * FROM registration ORDER BY r_id DESC";
  $run_data = mysqli_query($con,$sql) ;

?>
              
  <?php while ($prd=mysqli_fetch_assoc($run_data)) {  ?>
 
      <div class="col-sm-12">

      <div class="panel panel-default" >
       
         
          
     
        
        <div class="panel-body text-justify" style="height: 300px; overflow: hidden;">
           <img src="<?=$prd['pro_pic']?>" class="img-responsive img-thumbnail" align="left" style="height: 300px; width: 40%; margin-right: 30px;">
          

           <div style="margin-top: 20px;">

          <h2> <b><?=$prd['full_name']?></b></h2>
          <h4>Email: <?=$prd['email']?></h4>
          <h4>Phone: <?=$prd['phone']?></h4>
          <h4>Blood Group: <?=$prd['b_group']?></h4>
          <h4>Gender: <?=$prd['gender']?></h4>
          <h4>Date of Birth: <?=$prd['dob']?></h4>

          <h4>From: <?=$prd['city']?> ,<?=$prd['state']?>.</h4>

          <h4>Zip Code: <?=$prd['zip']?></h4>
          
      </div>

        


        </div>
        <div style="margin-top:10px; margin-left: 10px; margin-bottom: 15px;">
       <a href="remove.php?r_id=<?= $prd['r_id'] ?>" class="btn btn-primary">Remove</a>

  

     
        
        </div>

      </div>

    </div>



<?php  
}?>
    
    


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
<?php }
} ?>