<?php if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == true){ ?>
  <div class="col-lg-3 mb-4">
          <div class="list-group">
            <a href="profile.php" class="list-group-item">Post</a>
            <a href="uploaded_post.php" class="list-group-item">Uploaded Posts</a>
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 0){ ?>
            <a href="pending_post.php" class="list-group-item">
            Pending Posts</a>
             <a href="rejected_post.php" class="list-group-item">
            Rejected Post</a>
          <?php } ?>
             <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>
            <a href="requested_post.php" class="list-group-item">
            Requested Post</a>
          <?php } ?>

            <a href="per_info.php" class="list-group-item">Personal Information</a>
            <a href="update_info.php" class="list-group-item">Update Information</a>
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 0){ ?>

            <a href="added_groups.php" class="list-group-item">Group</a>
            <a href="requested_groups.php" class="list-group-item">Group Request</a>
            <a href="groups.php" class="list-group-item">Create Group</a>
            <a href="created_groups.php" class="list-group-item">Your created Groups</a>

          <?php } ?>
          <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>
            <a href="all_user.php" class="list-group-item">
            All Users</a>
           
           

          <?php } ?>


          
        
          
            
          </div>
        </div>
        <?php  } ?>