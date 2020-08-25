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

             <div class="row">
<div class="col-sm-12">

  <?php 
      $con = connect();
      $re_id=$_SESSION['r_id'];
      $g_id=$_SESSION['g4_id'];
      $sql1 = "SELECT * FROM groups WHERE `g_id`='$g_id'";
    $run_data1 = mysqli_query($con,$sql1);

?>
              
  <?php while ($prd1=mysqli_fetch_assoc($run_data1)) {  ?>
  <h3 class="well">Group Posts of <?=$prd1['g_name']?></h3>
<?php } ?>
  
</div>

<?php 
      $con = connect();
      $re_id=$_SESSION['r_id'];
      $g_id=$_SESSION['g4_id'];
      $sql = "SELECT * FROM group_post WHERE `g_id`='$g_id' ORDER BY p_time DESC";
    $run_data = mysqli_query($con,$sql);

?>
              
  <?php while ($prd=mysqli_fetch_assoc($run_data)) {  ?>
 
 <div class="col-sm-12">

      <div class="panel panel-default" >
        <div class="panel-heading"> <h4><?=$prd['g_p_title']?> </h4> 

          </h5> 
        </div>
        
        <div class="panel-body text-justify" style="">
          <p >
            <img src="<?=$prd['g_p_pic']?>" class="img-responsive img-thumbnail" width="150" align="left" style="margin-right: 10px;">
          

          <?=$prd['g_p_content']?>

          </p>


        </div>
        

      </div>

    </div>



<?php } ?>

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
