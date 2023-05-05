<?php 	$con = mysqli_connect("localhost","root","","student_profile") or die ("<b>Connection was not Created</b>");

function formatDate($date){
  return date('g:i a', strtotime($date));
}

?>
