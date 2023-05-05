<?php

include("include/db_chat.php");


$per_page = 4;

if(isset($_GET['page'])){
  $page = $_GET['page'];
}else {
  $page = 1;
}

//page will start from 0 and multiply by per page
$start_from = ($page-1) * $per_page;


//select the data from page but with limits
$query = "SELECT * FROM chat ORDER BY id DESC LIMIT $start_from, $per_page";
//$result = mysqli_query($con, $query);
$run = mysqli_query($con,$query);


?>

  <?php
    //while ($row = mysqli_fetch_assoc($result)) {
    while ($row=mysqli_fetch_array($run)) {

  ?>
    <div id="chat_data">
      <span style="color:white; padding-right:2px; float:left;"><?php echo $row['name']; ?></span>
      <span style="  padding-right:5px; float:left;"><?php  echo "<img src='imgs/reg_pics/".$row['imgs']."' style='width: 80px; height: 55px;'>"; ?></span>
      <span style="padding-left:3px; padding-right:3px; float:right; color:#eed739; background-color:#38873c;"><?php echo formatDate($row['date']); ?></span>
      <textarea style="color:black; margin-left:10px; border: 0px; background: #acd62a;" rows="3" cols="68" disabled="disabled"><?php echo $row['msgs']; ?></textarea>
    </div>
      <br>


  <?php
    };
  ?>



<?php
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
echo "<center style='margin: 0px 10px;'><a href='home.php?chat=$chat_id?page=1'>".'First Page'."</a>";

for ($i = 1; $i<=$total_pages; $i++){
  echo "<a href='home.php?chat=$chat_id?page=".$i."'>".$i."</a>";
};

//Going to last page
echo "<a href='home.php?chat=$chat_id?page=$total_pages'>".'Last Page'."</a></center>";

 ?>








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
