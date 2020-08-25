<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php include_once('partial/head.php'); ?>
<?php include_once('dbcon.php');?>
<body>



<?php include_once('partial/navigation.php'); ?>

<div class="container">

	<div class="row" style="margin-top: 80px;">
		<div class="col-sm-8">
 
      <div class="row well">
        <form action="" method="POST">
  <div class="form-row">

           <div class="col-sm-4" style="margin-top: 10px;">
<div class="form-group">
  <label for="sel1">Select Blood Group</label>
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

  <div class="col-sm-8" style="margin-top: 10px;">
<label for="validationDefault02">Search</label>
      <div class="input-group">
        
        <input name="search" type="text" class="form-control" placeholder="Search Donor By Area, Phone, Email or Group" id="txtSearch" required>
        <div class="input-group-btn">
          <button name="btn_post" class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </div>
    </div>
  </div>

</form>
      </div>


<?php 
    
      $con = connect();
      if(isset($_POST['btn_post']))
      {

        $search = $_POST['search'];
        $b_group = $_POST['b_group'];


      $sql = "SELECT * FROM `registration` WHERE(f_name='$search' OR l_name='$search' OR full_name='$search' OR email='$search' OR phone='$search' OR city='$search'OR state='$search' OR zip='$search')AND b_group='$b_group'";
      $result11 = $con->query($sql);

      foreach($result11 AS $prd){?>
    

              <div class="col-sm-12">

      <div class="panel panel-default" >
       
         
          
     
        
        <div class="panel-body text-justify" style="height: 280px; overflow: hidden;">
           <img src="<?=$prd['pro_pic']?>" class="img-responsive img-thumbnail" align="left" style="height: 250px; width: 40%; margin-right: 30px; margin-bottom: 20px;">
          

           <div style="margin-top: 5px;">

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
        

      </div>

    </div>
      

    <?php
     } 
        }
      ?>

  



   

    </div>
	
    <div class="col-sm-4 text-justify" >

			<h1 class="well">Search a Donor</h1>

      <p>XAMPP is meant only for development XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to develop locally but that are insecure if you want to have your installation accessible to others. If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to develop locally but that are insecure if you want to have your installation accessible to others. If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to develop locally but that are insecure if you want to have your installation accessible to others. If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to develop locally but that are insecure if you want to have your installation accessible to others. If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.pu</p>
		</div>

		
  </div>

</div>
	

</body>

<footer>
	
</footer>
</html>