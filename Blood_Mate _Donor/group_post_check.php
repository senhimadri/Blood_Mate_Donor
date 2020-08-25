
<?php session_start(); ?>

<?php 
if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true)
{
      include_once('dbcon.php');
      $con = connect();

        $imagename=$_FILES["myimage"]["name"];
        $tmpname=$_FILES["myimage"]["tmp_name"];
        $folder="group_post_pic/".$imagename;

        move_uploaded_file($tmpname,$folder);

        
       

        $g_title = $_POST['title'];
        $g_content = $_POST['content'];
     
        $r_id = $_SESSION['r_id'];
        $g_id = $_SESSION['g6_id'];
        $sql = "INSERT INTO group_post (g_id,p_r_id,g_p_title,g_p_content,g_p_pic) VALUES ('$g_id','$r_id','$g_title','$g_content','$folder')";
        $con->query($sql);

         header("location:added_groups.php");



  }


?>