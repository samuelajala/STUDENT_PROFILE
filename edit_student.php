
<?php

include("include/db.php");

$edit_id = $_GET['edit_profile'];
$sel = "select * from register_student where id='$edit_id'";
$run = mysqli_query($con,$sel);

$row=mysqli_fetch_array($run);

$reg_number = $row['reg_number'];
$std_faculty = $row['faculty'];
$std_department = $row['department'];
$std_year = $row['year'];
$std_surname = $row['surname'];
$std_FN = $row['first_name'];
$std_MN = $row['middle_name'];
$std_gender = $row['gender'];
$std_nation=$row['nationality'];
$std_bank=$row['Bank_number'];
$std_account=$row['Account_number'];
$std_sortCode = $row['sort_code'];
$std_blood=$row['blood_group'];
$std_phone=$row['phone_number'];
$std_img=$row['std_img'];

?>
<div class="container-fluid">
<div class="jumbotron-new">
  <span>UPDATE YOUR PROFILE</span>
</div>
  <div class="col-xs-8">
  <form role="form" action="" method="post">
    <div class="form-group-new">
      <label for="reg_num" class="ul_text">Reg Number:</label>
      <input class="group-control-new" name="reg_number" type="text" value="<?php echo $reg_number; ?>" >
    </div>
    <div class="form-group-new">
    <label for="std_fal" class="ul_text">Faculty:</label>
          <select class="" name="std_faculty" class="ul_text">
            <option><?php echo $std_faculty; ?></option>
            <option>Physical Science</option>
            <option>Bioscience</option>
            <option>Agriculture</option>
            <option>Environmental Science</option>
            <option>Engineering</option>
            <option>Education</option>
            <option>Phamaceutical Science</option>
            <option>Natural Science</option>
          </select>
    </div>

    <div class="form-group-new">
      <label for="std_dept" class="ul_text">Department:</label>
            <select class="" name="std_department">
              <option><?php echo $std_department; ?></option>
              <option>Civil Engineering</option>
              <option>Chemical Engineering </option>
              <option>Mechanical Engineering</option>
              <option>Electrical / Electronic Engineering Science</option>
              <option>Urban and Regional Planing</option>
              <option>Microbiology</option>
              <option>Computer Science</option>
              <option>Geology Science</option>
        </select>
      </div>
      <div class="form-group-new">
        <label for="std_yr" class="ul_text">Year:</label>
              <select class="" name="std_year">
                <option><?php echo $std_year; ?></option>
                <option>100</option>
                <option>200</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
                <option>600</option>
          </select>
        </div>
          <div class="form-group-new">
            <label for="std_sur" class="ul_text">Surname:</label>
            <input class="" name="std_surname" type="text" value="<?php echo $std_surname; ?>">
          </div>
          <div class="form-group-new">
            <label for="std_FN" class="ul_text">First Name:</label>
            <input class="" name="std_FN" type="text" value="<?php echo $std_FN; ?>">
          </div>
          <div class="form-group-new">
            <label for="std_FN" class="ul_text">Middle Name:</label>
            <input class="" name="std_MN" type="text" value="<?php echo $std_MN; ?>">
          </div>
          <div class="form-group-new">
          <label for="std_yr" class="ul_text">Gender:</label>
            <select class="" name="std_gender">
                  <option><?php echo $std_gender; ?></option>
                  <option>Male</option>
                  <option>Female</option>
          </select>
          </div>
          <div class="form-group-new">
              <label for="std_FN" class="ul_text">Nationality</label>
              <input class="" name="std_nation" type="text" value="<?php echo $std_nation; ?>">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Bank Name:</label>
              <input class="" name="std_bank" type="text" value="<?php echo $std_bank; ?>">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Account Number:</label>
              <input class="" name="std_account" type="text" value="<?php echo $std_account; ?>">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Sort Code:</label>
              <input class="" name="std_sortCode" type="text" value="<?php echo $std_sortCode; ?>">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Blood Group:</label>
              <input class="" name="std_blood" type="text" value="<?php echo $std_blood; ?>">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Phone Number:</label>
              <input class="" name="std_phone" type="text" value="<?php echo $std_phone; ?>">
            </div>
            <div class="form-group-new">
              <input class=""  type="submit" name="update_reg" value="UPDATE">
              <input class="" name="preview_btn" type="button" value="PREVIEW">
            </div>
  </form>
</div>


<div class="col-xs-4">
  <form method = "post" action ="" enctype = "multipart/form-data">
    <div class="form-image">
        <label class="ul_text">Student Passport:</label>
          <div><?php  echo "<img src='imgs/reg_pics/".$row['std_img']."' id='img_upload'  alt='Max Image Size 1.5MB'>"; ?> </div>
            <input type="file" name="std_img" required="required"/>
            <input type="submit" name="upload_picture" value="Upload"/>
          </div>
</div>
</div>
  </form>

</div>
</div>
<?php
update_student();
upload_pic();
?>
