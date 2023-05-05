<?php
$id = $_GET['profile'];
 ?>
<div class="col-xs-3">
  <div class="sidebar">
      <div class="sidebar-content">
       <div class="list-group-new">
           <a class="list-group-item list-group-item-new" href="home.php?profile=<?php echo $id; ?>"><span class="ul_text">Personal Profile</span> <i class="icon-screen2"></i></a>
           <a class="list-group-item list-group-item-new" href="home.php?profile=<?php echo $id; ?>"><span class="ul_text">Change Password</span> <i class="icon-lock2"></i></a>
           <a class="list-group-item list-group-item-new" href="home.php?profile=<?php echo $id; ?>"><span class="ul_text">General Chat</span> <i class="icon-upload4"></i></a>
           <a class="list-group-item list-group-item-new" href="logout.php"><span class="ul_text">Log Out</span> <i class="icon-upload4"></i></a>
      </div>
      </div>
    </div>
  </div>
