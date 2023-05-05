<?php
include("include/db.php");

$edit_id = $_GET['profile'];
$sel = "select * from pin_activation where id='$edit_id'";
$run = mysqli_query($con,$sel);

$row=mysqli_fetch_array($run);

$reg_number = $row['std_reg'];

?>


<div class="container-fluid">
<div class="jumbotron-new">
  <span id="">FILL YOUR PROFILE</span>
</div>
  <div class="col-xs-12">
  <form role="form" action="" method="post">
    <div class="form-group-new">
      <label for="reg_num" class="ul_text">Reg Number:</label>
      <input class="group-control-new" name="reg_number" required="required" type="text" value="<?php echo $reg_number; ?>">
    </div>
    <div class="form-group-new">
    <label for="std_fal" class="ul_text">Faculty:</label>
          <select class="" name="std_faculty" required="required">
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
            <select class="" name="std_department" required="required">
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
              <select class="" name="std_year" required="required">
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
            <input class="" name="std_surname" type="text" required="required">
          </div>
          <div class="form-group-new">
            <label for="std_FN" class="ul_text">First Name:</label>
            <input class="" name="std_FN" type="text" required="required">
          </div>
          <div class="form-group-new">
            <label for="std_FN" class="ul_text">Middle Name:</label>
            <input class="" name="std_MN" type="text" required="required">
          </div>
          <div class="form-group-new">
          <label for="std_yr" class="ul_text">Gender:</label>
            <select class="" name="std_gender" required="required">
                  <option>Male</option>
                  <option>Female</option>
          </select>
          </div>
          <div class="form-group-new">
              <label for="std_FN" class="ul_text">Nationality</label>
              <input class="" name="std_nation" type="text" required="required">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Bank Name:</label>
              <input class="" name="std_bank" type="text" required="required">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Account Number:</label>
              <input class="" name="std_account" type="text" required="required">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Sort Code:</label>
              <input class="" name="std_sortCode" type="text" required="required">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Blood Group:</label>
              <input class="" name="std_blood" type="text" required="required">
            </div>
            <div class="form-group-new">
              <label for="std_FN" class="ul_text">Phone Number:</label>
              <input class="" name="std_phone" type="text" required="required">
            </div>
            <div class="form-group-new">
              <input class="" id="submit" type="submit" name="student_reg">
            </div>
  </form>
</div>
</div>
<?php register_student(); ?>
