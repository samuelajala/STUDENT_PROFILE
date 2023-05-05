<?php
if(isset($_GET['edit_profile'])){
    include("include/db.php");
  $Get_id = $_GET['edit_profile'];


  $sel_id = "select * from register_student where id = '$Get_id'";
  $run_id = mysqli_query($con,$sel_id);

    //giving us all the rows of that pin
  $check_id = mysqli_num_rows($run_id);

  if($check_id==1){

  $row=mysqli_fetch_array($run_id);

  $current_id = $row['id'];
}
}

if(isset($_GET['password'])){
  $Get_id = $_GET['password'];
  include("include/db.php");

  $sel_id = "select * from register_student where id = '$Get_id'";
  $run_id = mysqli_query($con,$sel_id);

    //giving us all the rows of that pin
  $check_id = mysqli_num_rows($run_id);

  if($check_id==1){

  $row=mysqli_fetch_array($run_id);

  $current_id = $row['id'];
}
}


if(isset($_GET['chat'])){
  $Get_id = $_GET['chat'];
  include("include/db.php");

  $sel_id = "select * from register_student where id = '$Get_id'";
  $run_id = mysqli_query($con,$sel_id);

    //giving us all the rows of that pin
  $check_id = mysqli_num_rows($run_id);

  if($check_id==1){

  $row=mysqli_fetch_array($run_id);

  $current_id = $row['id'];
}
}

?>


<div class="col-xs-3">
  <div class="sidebar">
      <div class="sidebar-content">
       <div class="list-group-new">

           <a class="list-group-item list-group-item-new" href="home.php?edit_profile=<?php echo $current_id; ?>"><span class="ul_text">Personal Profile</span> <i class="icon-screen2"></i></a>
           <a class="list-group-item list-group-item-new" href="home.php?password=<?php echo $current_id; ?>"><span class="ul_text">Change Password</span> <i class="icon-lock2"></i></a>
           <a class="list-group-item list-group-item-new" href="home.php?chat=<?php echo $current_id; ?>"><span class="ul_text">General Chat</span> <i class="icon-upload4"></i></a>
           <a class="list-group-item list-group-item-new" href="logout.php"><span class="ul_text">Log Out</span> <i class="icon-upload4"></i></a>
      </div>
      </div>
    </div>
  </div>
