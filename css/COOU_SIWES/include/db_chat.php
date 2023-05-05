<?php 	$con = mysqli_connect("localhost","root","","coou_db") or die ("<b>Connection was not Created</b>");

function formatDate($date){
  return date('g:i a', strtotime($date));
}

?>
