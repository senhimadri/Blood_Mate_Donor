<?php session_start(); ?>
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
  <h3 class="well">Your Created Groups</h3>
  
</div>

<?php 
      $con = connect();
      $re_id=$_SESSION['r_id'];
      $sql = "SELECT * FROM `groups` WHERE c_rid='$re_id' ORDER BY g_date DESC";
    $run_data = mysqli_query($con,$sql);

?>
              
  <?php while ($prd=mysqli_fetch_assoc($run_data)) {  ?>
 
      <div class="col-sm-12">

      <div class="panel panel-default" >
      <div class="panel-heading"> <h3><?=$prd['g_name']?></h3> 

        </div>
        
        <div class="panel-body text-justify" style="height: 250px; overflow: hidden;">
             <img src="<?=$prd['g_cover']?>" class="img-responsive img-thumbnail" align="left" style=" width: 350px; margin-top: 15px; margin-right: 20px; margin-bottom: 20px;">
             <h4>Description of Group</h4>
          
          <p><?=$prd['g_description']?></p>
      

        


        </div>
        <div style="margin-top:10px; margin-left: 10px; margin-bottom: 15px;">
       <a href="add_people.php?g_id=<?= $prd['g_id'] ?>" class="btn btn-primary">Add People</a>
       <a href="btn_g_post.php?gg_id=<?= $prd['g_id'] ?>" class="btn btn-primary">Post Here</a>

        <a href="btn_see_post.php?g4_id=<?= $prd['g_id'] ?>" class="btn btn-primary">See Posts</a>

       <a href="btn_see_member.php?g_id=<?= $prd['g_id'] ?>" class="btn btn-primary">See Members</a>

       
         <a href="reject.php?p_id=<?= $prd['p_id'] ?>" class="btn btn-primary">Remove</a>
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