<?php
include("include/db.php");
$edit_id = $_GET['password'];
$sel = "select * from register_student where id='$edit_id'";
$run = mysqli_query($con,$sel);

$row=mysqli_fetch_array($run);

$password = $row['std_password'];
?>

<div class="container-fluid">
<div class="jumbotron-new">
  <h2>Change Your Password</h2>
</div>
  <div class="col-xs-8">
  <form role="form" action="" method="post">
    <div class="form-group-new">
      <label for="reg_num">Current Password:</label>
      <input class="group-control-new" name="current_pass" type="text" value="<?php echo $password; ?>">
    </div>
          <div class="form-group-new">
            <label for="std_sur">New Password:</label>
            <input class="" name="std_password1" type="password">
          </div>
          <div class="form-group-new">
            <label for="std_FN">Confirm Password:</label>
            <input class="" name="std_password2" type="password"><br>
            <div class="form-group-new">
              <input style="margin-top: 10px;" id="submit" type="submit" name="student_pass">
            </div>
  </form>
</div>
</div>

<?php

  if(isset($_POST['student_pass'])){

    $current_pass = mysqli_real_escape_string($con,$_POST['current_pass']);
    $password1 = mysqli_real_escape_string($con,$_POST['std_password1']);
    $password2 = mysqli_real_escape_string($con,$_POST['std_password2']);


             if ($password1=='' OR $password2==''){
             echo "<script>alert('Please fill all the fields!')</script>";
             exit();//codes below will not run unless the conditions have been attended to
             }

             if(strlen($password1)<6){
            echo "<script>alert('Password must be 6 characters minimum')</script>";
            exit();
            }

            if ($password1 != $password2) {
              echo "<script>alert('Password do not match')</script>";
              exit();
            }


    $update_id = $_GET['password'];
    $sel2 = "select * from register_student where id='$update_id'";
    $run2 = mysqli_query($con,$sel2);

    $check_id2 = mysqli_num_rows($run2);
    //giving us all the rows of that id
  if ($check_id2 == 1) {

      $update = "update register_student set  std_password='$password2' where id = '$edit_id'";
  		$run_update = mysqli_query($con, $update);

  			if($run_update){
          $change = "changed";
          $update2 = "update pin_activation set std_pass='$change' where std_pass='$current_pass'";
          $run_update2 = mysqli_query($con,$update2);

  				echo "<script>alert('profile update successfully')</script>";
  				//redirecting the person to another page
                       $sel = "select * from register_student where id='$update_id'";
                       $run = mysqli_query($con,$sel);

                       $row=mysqli_fetch_array($run);

                       $edit_id = $row['id'];

              echo"<script>window.open('home.php?edit_profile=$edit_id','_self')</script>";


  }else{
echo "<script>alert('Error!! Refresh and try again')</script>";
}
}
}

 ?>
