
<?php session_start(); ?>

<?php 
if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true)
{
      include_once('dbcon.php');
      $con = connect();

        $imagename=$_FILES["myimage"]["name"];
        $tmpname=$_FILES["myimage"]["tmp_name"];
        $folder="group_image/".$imagename;

        move_uploaded_file($tmpname,$folder);

        
       

        $g_name = $_POST['g_name'];
        $g_description = $_POST['g_description'];
        $r_Id = $_SESSION['r_id'];
        $creator_name = $_SESSION['full_name'];

        $sql = "INSERT INTO groups (`g_name`,`g_cover`,`g_description`,`c_rid`,`creator_name`) VALUES ('$g_name','$folder','$g_description','$r_Id','$creator_name')";

      $con->query($sql);

      header('location:created_groups.php');


  }


?>