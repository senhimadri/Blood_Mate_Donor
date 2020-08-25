<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php include_once('partial/head.php'); ?>
<?php include_once('dbcon.php');?>
<body>


<?php include_once('partial/navigation.php'); ?>


<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-sm-12">

			<h3>Welcome to Blood Mate Blog</h3>
		</div>
	</div>
	

	 <div class="row">
	<?php
$con = connect();
	$sql = "SELECT * FROM `blog_post`,`registration` WHERE blog_post.r_id=registration.r_id AND blog_post.p_type='Header' AND p_id=(SELECT MAX(p_id) FROM `blog_post`)";
	$result1 = $con->query($sql);


	// echo $result;
?>
<?php foreach($result1 AS $prd){ ?>
 
    	<div class="col-sm-12" >

			<div class="panel panel-default" style="height: 500px; " >
				<div class="panel-heading"> <h2><?=$prd['p_title']?> </h2> 
					<h5>Posted By <?=$prd['full_name']?></h5>
				</div>
				
				<div class="panel-body text-justify" style=" height: 350px; overflow: hidden;">
					<p>
						<img src="<?=$prd['image']?>" class="img-responsive img-thumbnail" width="400" align="left" style="margin-right: 10px;">

					<?=$prd['p_content']?>

					</p>
				</div>

			</div>

		</div>

<?php } ?>




	</div>

	<div class="row">
		
<div class="col-sm-12 ">
	
	<h3 class="well">Latest News</h3>
</div>
<?php
$con = connect();
	$sql = "SELECT * FROM `blog_post`,`registration` WHERE blog_post.r_id=registration.r_id AND blog_post.p_type='Latest News' AND blog_post.position='1'";
	$result1 = $con->query($sql);


	// echo $result;
?>
<?php foreach($result1 AS $prd){ ?>
 
    	<div class="col-sm-4" >

			<div class="panel panel-default" style="height: 400px; " >
				<div class="panel-heading"> <h4><?=$prd['p_title']?> </h4> 
					<h5>Posted By <?=$prd['full_name']?></h5>
				</div>
				
				<div class="panel-body text-justify" style=" height: 300px; overflow: hidden;">
					<p>
						<img src="<?=$prd['image']?>" class="img-responsive img-thumbnail" width="150" align="left" style="margin-right: 10px;">

					<?=$prd['p_content']?>

					</p>
				</div>

			</div>

		</div>

<?php } ?>





	</div>

	<div class="row">
		
<div class="col-sm-12 ">
	
	<h3 class="well">General Posts</h3>
</div>
<?php
$con = connect();
	$sql = "SELECT * FROM `blog_post`,`registration` WHERE blog_post.r_id=registration.r_id AND blog_post.p_type='General Post' AND blog_post.position='1'";
	$result1 = $con->query($sql);


	// echo $result;
?>
<?php foreach($result1 AS $prd){ ?>
 
    	<div class="col-sm-4" >

			<div class="panel panel-default" style="height: 400px; " >
				<div class="panel-heading"> <h4><?=$prd['p_title']?> </h4> 
					<h5>Posted By <?=$prd['full_name']?></h5>
				</div>
				
				<div class="panel-body text-justify" style=" height: 300px; overflow: hidden;">
					<p>
						<img src="<?=$prd['image']?>" class="img-responsive img-thumbnail" width="150" align="left" style="margin-right: 10px;">

					<?=$prd['p_content']?>

					</p>
				</div>

			</div>

		</div>

<?php } ?>





	</div>



	

	
</div>

</body>

<footer>
	
</footer>
</html>