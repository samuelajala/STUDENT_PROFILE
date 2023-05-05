<?php

		//starting a session for our user login
		session_start();

		//database connection
		include("include/db.php");
		include("include/function.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css"  media="screen">
    <link rel="stylesheet" href="css/style.css"  media="screen">

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>::COOU SIWES | LOGIN ::</title>
  </head>
<body class="container-fluid">
    <?php include("include/header.php");
					choose();
          include("login.php");
        if(isset($_GET['login'])){
          echo"<script>window.open('index.php','_self')</script>";
        }elseif (isset($_GET['account'])) {
            include("account.php");
        }
    		include("include/footer.php");
		?>
</body>
</html>
