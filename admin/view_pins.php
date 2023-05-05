<?php
session_start();


if(!$_SESSION['admin_email']){
	header("location: index.php");
	}
	else{

?>



<!DOCTYPE html>
<?php
	include("../include/db.php");
?>
<html>
	<head>
		<title> View Pins - Admin Panel</title>

    <link rel="stylesheet" href="../css/bootstrap.css"  media="screen">
		<style>
			body{
				padding:0px;
				margin:0px;
				background:skyblue;
			}
			table{
			color:white;
			padding: 2px;
			width:1000px;
			background: orange;
			}
			th{
				border:2px solid black;
			}

			input{
				padding:5px;
			}
			h3{
				margin-right:5%;
			}
		</style>

	</head>

<body>

	<table align = "center" style="font-size:30px;" class="table table-bordered">
		<h3 style="text-align:center;">Welcome: <?php echo $_SESSION['admin_email']?> <a href = "admin_logout.php">Logout</a></h3>
		<form class="" action="" method="post">
			<input type="submit" name="generate" value="GENERATE 10 NEW PINS"class="btn btn-primary btn-lg btn-block">
		</form>
		<tr>
			<td colspan="7" style="text-align:center;"><h2>View All Pins</h2></td>
		</tr>
		<tr align="center" >
			<th style="text-align:center;">S.N</th>
			<th style="text-align:center;">PINS</th>
		</tr>

		<?php
		if (isset($_POST['generate'])) {
			for ($i = 1; $i<=10; $i++){
					$pin= 147 * mt_rand();
					$query = "INSERT INTO pins (card_pin) values ('$pin')";
	        $run = mysqli_query($con,$query);
	        if ($run) {
	          echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
	        }
			};
		}

		$sel = "select * from pins";
		$run = mysqli_query($con,$sel);

		//for counting the serial number
		$i = 0;
		while ($row=mysqli_fetch_array($run)){

			$pin = $row['card_pin'];

			$i++;
		//}			we won't close here
		?>
		<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $pin; ?></td>
		</tr>
		<?php
			}
			//we'll close our curely tag here so that all data can be displayed on the table
		?>
	</table>

</body>
</html>
<?php } ?>
