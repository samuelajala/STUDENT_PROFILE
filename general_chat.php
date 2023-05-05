
    <script>
      function ajax() {

        //this is an object for sending ajax request
        var reg = new XMLHttpRequest();

        reg.onreadystatechange = function(){

        if(reg.readyState == 4 && reg.status == 200){
          document.getElementById('chat').innerHTML = reg.responseText;
        }
        }
        reg.open('GET','chat.php',true);
        reg.send();
      }
      //setting a time interval for our ajax function to run. 1seconds. which is written by 1000 miliseconds
      setInterval(function(){ajax()},1000)
      //this will automatically refresh the page, we'll not see anything and feel anything.
  </script>


<?php

if(isset($_GET['chat'])){
   $Get_id = $_GET['chat'];
  include("include/db.php");

  $sel_id = "select * from register_student where id = '$Get_id'";
  $run_id = mysqli_query($con,$sel_id);

    //giving us all the rows of that pin
  $check_id = mysqli_num_rows($run_id);

  if($check_id==1){

  $row=mysqli_fetch_array($run_id);

  $real_chat_id = $row['id'];

}
}




  $per_page = 5;
  $_SESSION['per_page'] = $per_page;
  $page = 1;

 //Now select all from table
 $query = "select * from chat";
 //$result = mysqli_query($con, $query);
 $result = $con->query($query);
 //Count the total records
 //$total_records = mysqli_num_rows($result);
 $total_records = $result->num_rows;

 //Using cell function to divide the total records on per page
 $total_pages = ceil($total_records / $per_page);


 $sel2 ="SELECT chat_id FROM chat ORDER BY id DESC";
 $run2 = mysqli_query($con,$sel2);
 $row2=mysqli_fetch_array($run2);
 $chat_id = $row2['chat_id'];
 //Going to first page

?>


<div class="container-fluid" onload="ajax();">
<div class="jumbotron-new">
  <span>Chat with friends
    <?php

     for ($i = 1; $i<=$total_pages; $i++){

       echo"<form class='' action='home.php?chat=$real_chat_id' method='post'>
         <input type='text' name='chat_num' value='".$i."' hidden='hidden'>
         <input type='submit' name='chat_pages' value='".$i."' style='float:left; margin-right:1%;'>
       </form>";
     };

     if (isset($_POST['chat_pages'])) {
        $page = $_POST['chat_num'];
        $_SESSION['page'] = $page;
     }
    ?>
  </span>

</div>
<div class="class="col-xs-12"">
  <div id="chat_container">
    <div id="chat_box">
      <div id="chat"></div>
    </div>
  <div id="chat_form">
    <form class="" action="" method="post">
      <textarea name="msg" placeholder="Enter message" required="required"></textarea>
      <input type="submit" name="submit" value="SEND">
    </form>
  </div>

    <?php

    include("include/db.php");
    $edit_id = $_GET['chat'];

    $sel = "SELECT CONCAT(surname, ' ', first_name) AS chat_name FROM register_student where id='$edit_id'";
    $run = mysqli_query($con,$sel);
    $row=mysqli_fetch_array($run);


    $sel2 ="SELECT * FROM register_student where id='$edit_id'";
    $run2 = mysqli_query($con,$sel2);
    $row2=mysqli_fetch_array($run2);

      if (isset($_POST['submit'])) {

          $_SESSION['page'] = 1;

        $name = $row['chat_name'];
        $msg = $_POST['msg'];
        $img = $row2['std_img'];

        $query = "INSERT INTO chat (name,msgs,imgs,chat_id) values ('$name','$msg','$img','$chat_id')";
              echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />";
        $run = mysqli_query($con,$query);
        if ($run) {
          echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />";
        }
      }
    ?>
</div>
</div>
</div>
