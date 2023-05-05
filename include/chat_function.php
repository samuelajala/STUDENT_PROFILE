<?php
function chat_page(){
  if (isset($_POST['chat_pages'])) {
     $page = $_POST['chat_num'];
     $_SESSION['page'] = $page;
  }
}

?>
