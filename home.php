<?php



session_start();

include("include/function.php");

if(!$_SESSION['std_reg']){
	//header is a function in php to take the browser to another page.
	header("location: index.php");
	}
	else{
		//we'll close this else statement at the end of the </html> tag
		//meaning if they have created SESSIion with their std_reg, and it's still on, open the below page.
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
    <?php include("include/header.php");?>
    <div class="row">
      <?php

			if (isset($_GET['profile'])) {
				include("include/bodyleft.php");
			}else{
					include("include/bodyleft2.php");
			}
      include("include/bodyright.php");

			?>
    </div>
</body>
</html>
<?php } ?>
