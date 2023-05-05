
<?php




function change_password(){
}

function upload_pic(){
  if(isset($_POST['upload_picture'])){
    include("include/db.php");
    $edit_id = $_GET['edit_profile'];
    $std_img = $_FILES['std_img']['name'];
    $std_img_tmp=$_FILES['std_img']['tmp_name'];
    move_uploaded_file($std_img_tmp,"imgs/reg_pics/$std_img");


      $update = "update register_student set std_img = '$std_img' where id = '$edit_id'";
     //the now function will add the date automatically to the register_date field in the database

      $run_update = mysqli_query($con, $update);

       if($run_update){
         echo "<script>alert('Passport Uploaded Successfully')</script>";
         //redirecting the person to another page
        echo"<script>window.open('home.php?edit_profile=$edit_id','_self')</script>";

}
  }
}

function update_student(){
  include("include/db.php");
  if(isset($_POST['update_reg'])){
    $edit_id = $_GET['edit_profile'];
    $reg_number = mysqli_real_escape_string($con,$_POST['reg_number']);
    $std_faculty = mysqli_real_escape_string($con,$_POST['std_faculty']);
    $std_department = mysqli_real_escape_string($con,$_POST['std_department']);
    $std_year = mysqli_real_escape_string($con,$_POST['std_year']);
    $std_surname = mysqli_real_escape_string($con,$_POST['std_surname']);
    $std_FN = mysqli_real_escape_string($con,$_POST['std_FN']);
    $std_MN = mysqli_real_escape_string($con,$_POST['std_MN']);
    $std_gender = mysqli_real_escape_string($con,$_POST['std_gender']);
    $std_nation= mysqli_real_escape_string($con,$_POST['std_nation']);
    $std_bank= mysqli_real_escape_string($con,$_POST['std_bank']);
    $std_account= mysqli_real_escape_string($con,$_POST['std_account']);
    $std_sortCode = mysqli_real_escape_string($con,$_POST['std_sortCode']);
    $std_blood= mysqli_real_escape_string($con,$_POST['std_blood']);
    $std_phone= mysqli_real_escape_string($con,$_POST['std_phone']);

    $update = "update register_student set  reg_number ='$reg_number', faculty='$std_faculty', department='$std_department',  year='$std_year', surname='$std_surname', first_name='$std_FN', middle_name='$std_MN', gender='$std_gender', nationality='$std_nation', Bank_number='$std_bank', Account_number='$std_account', sort_code='$std_sortCode', blood_group='$std_blood', phone_number='$std_phone' where id = '$edit_id'";


    		$run_update = mysqli_query($con, $update);

    			if($run_update){
    				echo "<script>alert('profile update successfully')</script>";
    				//redirecting the person to another page
                         $sel = "select * from register_student where reg_number='$reg_number'";
                         $run = mysqli_query($con,$sel);

                         $row=mysqli_fetch_array($run);

                         $edit_id = $row['id'];

                echo"<script>window.open('home.php?edit_profile=$edit_id','_self')</script>";

    			}
}
}

function register_student(){
  include("include/db.php");
  if(isset($_POST['student_reg'])){
    $reg_number = mysqli_real_escape_string($con,$_POST['reg_number']);
    $std_faculty = mysqli_real_escape_string($con,$_POST['std_faculty']);
    $std_department = mysqli_real_escape_string($con,$_POST['std_department']);
    $std_year = mysqli_real_escape_string($con,$_POST['std_year']);
    $std_surname = mysqli_real_escape_string($con,$_POST['std_surname']);
    $std_FN = mysqli_real_escape_string($con,$_POST['std_FN']);
    $std_MN = mysqli_real_escape_string($con,$_POST['std_MN']);
    $std_gender = mysqli_real_escape_string($con,$_POST['std_gender']);
    $std_nation= mysqli_real_escape_string($con,$_POST['std_nation']);
    $std_bank= mysqli_real_escape_string($con,$_POST['std_bank']);
    $std_account= mysqli_real_escape_string($con,$_POST['std_account']);
    $std_sortCode = mysqli_real_escape_string($con,$_POST['std_sortCode']);
    $std_blood= mysqli_real_escape_string($con,$_POST['std_blood']);
    $std_phone= mysqli_real_escape_string($con,$_POST['std_phone']);


        //checking if the student reg number already existed
            $sel_reg = "select * from register_student where reg_number = '$reg_number'";
            $run_reg = mysqli_query($con,$sel_reg);

            $check_reg = mysqli_num_rows($run_reg);
            //giving us all the rows of that email

          if ($check_reg == 1) {
           echo "<script>alert('Oops. Reg number already registered, Use your Reg')</script>";
          }else{
          $insert = "insert into register_student (reg_number,std_password, faculty, department, year, surname, first_name, middle_name, gender, nationality, Bank_number, Account_number, sort_code, blood_group, phone_number, time)
          values ('$reg_number','$reg_number','$std_faculty','$std_department','$std_year','$std_surname','$std_FN','$std_MN','$std_gender','$std_nation','$std_bank','$std_account','$std_sortCode','$std_blood','$std_phone',NOW())";
         //the now function will add the date automatically to the register_date field in the database

         $run_insert = mysqli_query($con, $insert);

           if($run_insert){
             echo "<script>alert('Profile Information inserted Successfully. Upload your Passport')</script>";
             //redirecting the person to another page

             $sel = "select * from register_student where reg_number='$reg_number'";
             $run = mysqli_query($con,$sel);

             $row=mysqli_fetch_array($run);

             $edit_id = $row['id'];

             echo"<script>window.open('home.php?edit_profile=$edit_id','_self')</script>";
}
}
}
}

function choose(){
 echo "<div class='row'>
 <ul class='nav-pills-new nav login-wrapper2'>
   <li><a href='index.php?login'>LOGIN HERE</a></li>
   <li ><a href='index.php?account'>ACTIVATE ACCOUNT</a></li>
 </ul>
 </div>";
}

function account(){
  include("include/db.php");
  if(isset($_POST['activate'])){
    $pin = mysqli_real_escape_string($con,$_POST['pin']);
    $std_reg = mysqli_real_escape_string($con,$_POST['std_reg']);
    $session = mysqli_real_escape_string($con,$_POST['session']);

    if ($pin=='' OR $std_reg=='' OR $session==''){
    echo "<script>alert('Please fill all the fields!')</script>";
    exit();//codes below will not run unless the conditions have been attended to
    }
    if(strlen($std_reg)<10){
		echo "<script>alert('Reg Number must be 10 characters minimum')</script>";
		exit();
		}
    if(strlen($std_reg)>10){
    echo "<script>alert('Reg Number must be 10 characters maximum')</script>";
    exit();
    }

    //checking if the student reg number already existed
        $sel_reg = "select * from pin_activation where std_reg = '$std_reg'";
        $run_reg = mysqli_query($con,$sel_reg);

        $check_reg = mysqli_num_rows($run_reg);
        //giving us all the rows of that email

      if($check_reg>=1){
        echo "<script>alert('This Registration Number is already registered, Please Login')</script>";
        echo"<script>window.open('index.php?login','_self')</script>";
        exit();
      }

    //checking if the pin is existing or not
    $sel_pin = "select * from pins where card_pin = '$pin'";
    $run_pin = mysqli_query($con,$sel_pin);

      //giving us all the rows of that pin
    $check_pin = mysqli_num_rows($run_pin);

    if($check_pin==1){

                $insert = "insert into pin_activation (pin, std_reg, std_pass, session, time)
                values ('$pin','$std_reg','$std_reg','$session',NOW())";
               //the now function will add the date automatically to the register_date field in the database

               $run_insert = mysqli_query($con, $insert);

                 if($run_insert){
                   echo "<script>alert('Activation Successful, Please Login!')</script>";
                   //redirecting the person to another page
                   echo"<script>window.open('index.php','_self')</script>";

                  //delete the pin so that a pin will not be used to activate twice.
                  $delete = "delete from pins where card_pin='$pin'";
                  $run_delete = mysqli_query($con, $delete);

                 }
        }else {
          echo "<script>alert('Invalid Pin, Please get a Valid Pin!')</script>";
          //redirecting the person to another page
          echo"<script>window.open('index.php?account','_self')</script>";
        }
     }
       }

     function login(){
         include("include/db.php");
       if(isset($_POST['signin'])){
         $username = mysqli_real_escape_string($con,$_POST['username']);
         $password = mysqli_real_escape_string($con,$_POST['password']);

         if ($username=='' OR $password==''){
         echo "<script>alert('Please fill all the fields!')</script>";
         exit();//codes below will not run unless the conditions have been attended to
         }
         //verifying the student details
         $sel = "select * from pin_activation where std_reg='$username' AND std_pass='$password'";

         $run = mysqli_query($con, $sel);

         $check = mysqli_num_rows($run);

         if($check==0){
           $sel2 = "select * from register_student where reg_number='$username' AND std_password='$password'";

           $run2 = mysqli_query($con, $sel2);

           $check2 = mysqli_num_rows($run2);

           if($check2==0){
           echo "<script>alert('Oops, Activate a Pin to Login')</script>";
           exit();
         }else {
           //create a session for this user first
          $_SESSION['std_reg']=$username;

         //redirecting the page
         $sel3 = "select * from register_student where reg_number='$username'";

         $run3 = mysqli_query($con, $sel3);

         $check3 = mysqli_num_rows($run3);

         if($check2==0){
           $sel = "select * from pin_activation where std_reg='$username'";
           $run = mysqli_query($con,$sel);

           $row=mysqli_fetch_array($run);

           $edit_id = $row['id'];
           header("location: home.php?profile=$edit_id");
        }else{
          $sel = "select * from register_student where reg_number='$username'";
          $run = mysqli_query($con,$sel);

          $row=mysqli_fetch_array($run);

          $edit_id = $row['id'];
          header("location: home.php?edit_profile=$edit_id");
        }

    }
         }
           else{
             //create a session for this user first
            $_SESSION['std_reg']=$username;

           //redirecting the page
           $sel2 = "select * from register_student where reg_number='$username'";

           $run2 = mysqli_query($con, $sel2);

           $check2 = mysqli_num_rows($run2);

           if($check2==0){
             $sel = "select * from pin_activation where std_reg='$username'";
             $run = mysqli_query($con,$sel);

             $row=mysqli_fetch_array($run);

             $edit_id = $row['id'];
           	header("location: home.php?profile=$edit_id");
          }else {
            $sel = "select * from register_student where reg_number='$username'";
            $run = mysqli_query($con,$sel);

            $row=mysqli_fetch_array($run);

            $edit_id = $row['id'];
            header("location: home.php?edit_profile=$edit_id");
          }

      }
     }
   }

?>
