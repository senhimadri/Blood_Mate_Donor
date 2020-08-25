
<?php session_start(); ?>

<?php 
if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true)
{
      include_once('dbcon.php');
      $con = connect();

        $imagename=$_FILES["myimage"]["name"];
        $tmpname=$_FILES["myimage"]["tmp_name"];
        $folder="blog_image/".$imagename;

        move_uploaded_file($tmpname,$folder);

        
       

        $title = $_POST['title'];
        $content = $_POST['content'];
        $p_type= $_POST['P_type'];
        $r_Id = $_SESSION['r_id'];
        $sql = "INSERT INTO blog_post (`p_title`,`p_content`,`p_type`,`image`,`r_id`) VALUES ('$title','$content','$p_type','$folder',$r_Id)";
        $con->query($sql);

         header("location:profile.php");



  }


?>