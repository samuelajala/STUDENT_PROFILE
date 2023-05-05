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
      <title>::STUDENT PROFILE::</title>
  </head>
<body class="container-fluid">
    <?php include("include/header.php"); ?>

		<div class="row">
			<div class="col-xs-6">
				<a href='index.php?login' style="text-decoration:none;"<button type="button" class="btn btn-lg btn-block login-btn">LOGIN HERE</button></a>
			</div>
			<div class="col-xs-6">

					<a href='index.php?account' style="text-decoration:none;"><button type="button" class="btn btn-lg btn-block login-btn">ACTIVATE ACCOUNT</button></a>
			</div>

		</div>

		 <?php
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
