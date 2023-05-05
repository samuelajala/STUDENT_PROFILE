<?php
session_start();

session_destroy();
unset($_SESSION['std_reg']);
//we need to break or destroy the session once the person click log out. the person will not have access to the page again. unless they login or register again.


//now, we'll redirect the person to login page.
header("location: index.php");
?>
