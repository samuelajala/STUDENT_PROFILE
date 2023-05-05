<?php
$id = $_GET['profile'];
 ?>
<div class="col-xs-3">
  <div class="sidebar">
      <div class="sidebar-content">
       <div class="list-group-new">
           <a class="list-group-item list-group-item-new" href="home.php?profile=<?php echo $id; ?>"><span>Personal Profile</span> <i class="icon-screen2"></i></a>
           <a class="list-group-item list-group-item-new" href="home.php?profile=<?php echo $id; ?>"><span>Change Password</span> <i class="icon-lock2"></i></a>
           <a class="list-group-item list-group-item-new" href="home.php?profile=<?php echo $id; ?>"><span>Upload SPE1 Form</span> <i class="icon-upload4"></i></a>
           <a class="list-group-item list-group-item-new" href="home.php?profile=<?php echo $id; ?>"><span>About Us</span> <i class="icon-upload4"></i></a>
           <a class="list-group-item list-group-item-new" href="logout.php"><span>Log Out</span> <i class="icon-upload4"></i></a>
      </div>
      </div>
    </div>
  </div>
