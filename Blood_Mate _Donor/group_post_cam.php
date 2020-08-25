<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

 <?php include_once('partial/head.php'); ?>

  <body>

    <!-- Navigation -->
    <?php include_once('partial/navigation.php'); ?>
    <!-- Page Content -->
    <div class="container" style="margin-top:40px;   "  >

      <!-- Page Heading/Breadcrumbs -->
      <h2 class="mt-4 mb-3">Sidebar Page
        <small>Subheading</small>
      </h2>

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
  
<form action="group_post_check.php" method="POST" enctype="multipart/form-data">

  <div class="form-row">

       <h3 class="well">Upload a Post For Groups</h3>
       <div class="col-sm-6">
      <label for="validationDefault01">Add a Title</label>
      <input name="title" type="text" class="form-control" id="title" placeholder="" value="" required></div>
      
      <div class="col-sm-6">
      <label for="validationDefault01">Add a Photo</label>
      <input name="myimage" type="file" class="form-control" id="title" placeholder="" value="" ></div>
  
    <div class="col-sm-12">
      <label for="validationDefault02">Add Your Content</label> <br>  

     <textarea class="form-control" name="content" rows="5" id="comment" required></textarea>
    </div> 
    <div class="col-sm-12" style="margin-top:10px;"  >
        <input type="submit" name="btn_post" class="btn btn-primary" value="Post">
    </div>

    </div> 
</form>
      
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
