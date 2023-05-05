
<div class="container-fluid">
  <div class="col-xs-9">
    <?php
      if(isset($_GET['profile'])){
        include("add_student.php");
        echo "<script>alert('Fill your profile Information first')</script>";
      }
      if(isset($_GET['edit_profile'])){
        include("edit_student.php");
      }
      if(isset($_GET['password'])){
        include("change_password.php");
      }
      if(isset($_GET['chat'])){
        include("general_chat.php");
      }

     ?>
  </div>
<div>
