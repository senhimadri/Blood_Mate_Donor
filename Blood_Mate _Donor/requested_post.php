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
  <h3 class="well">Requested Post</h3>
  
</div>

<?php 
      $con = connect();
      $sql = "SELECT * FROM `blog_post`,`registration` WHERE blog_post.r_id=registration.r_id AND position='0' ORDER BY p_date DESC";
    $run_data = mysqli_query($con,$sql);

?>
              
  <?php while ($prd=mysqli_fetch_assoc($run_data)) {  ?>
 
      <div class="col-sm-12">

      <div class="panel panel-default" style="">
        <div class="panel-heading"> <h4><?=$prd['p_title']?> </h4> 

          <h5><b><?=$prd['full_name']?></b> </h5> 

          <h5><b>Post Type: </b><?=$prd['p_type']?> </h5> 
        </div>
        
        <div class="panel-body" style="text-align: justify-all;">
          <p style="text-align: justify-all;">
            <img src="<?=$prd['image']?>" class="img-responsive img-thumbnail" width="150" align="left" style="margin-right: 10px;">

       
          <?=$prd['p_content']?>

          </p>


        </div>
        <div style="margin-top:5px; margin-left: 10px; margin-bottom: 15px;">
       <a href="req_accept.php?p_id=<?= $prd['p_id'] ?>" class="btn btn-primary">Accept</a>
       <a href="req_reject.php?p_id=<?= $prd['p_id'] ?>" class="btn btn-primary">Reject</a>
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
