<?php
session_start();
include("include/db_chat.php");
 //Going to last page

//page will start from 0 and multiply by per page
if(isset($_SESSION['page'])){
$page = $_SESSION['page'];
}else {
  $page = 1;
}
$start_from = ($page-1) * 5;


//select the data from page but with limits
$query = "SELECT * FROM chat ORDER BY id DESC LIMIT $start_from, 5";
//$result = mysqli_query($con, $query);
$run = mysqli_query($con,$query);


?>
  <div id="chat_div">
  <?php
    //while ($row = mysqli_fetch_assoc($result)) {
    while ($row=mysqli_fetch_array($run)) {

  ?>



      <div id="chat_content">
        <span id="chat_name"><?php echo $row['name']; ?></span>
      </div>
      <span id="chat_date"><?php echo formatDate($row['date']); ?></span>
      <span id="chat_img"><?php  echo "<img src='imgs/reg_pics/".$row['imgs']."'>"; ?></span>
      <textarea id="chat_text" rows="3" cols="" disabled="disabled"><?php echo $row['msgs']; ?></textarea>
      <br>

  <?php
    };
  ?>
</div><br>









<?php
/*  include("include/db_chat.php");

  $query = "SELECT * FROM chat ORDER BY id DESC LIMIT 30";
  $run = mysqli_query($con,$query);

  while($row=mysqli_fetch_array($run)) :
?>
<div id="chat_data">
  <span style="color:green;"><?php echo $row['name']; ?></span>:
  <span style="float:right;"><?php echo formatDate($row['date']); ?></span>
  <textarea style="color:brown; margin-left:5px; border: 0px; background: white; text-align: center" disabled="disabled"><?php echo $row['msgs']; ?></textarea>
</div>
<?php endwhile; */?>
