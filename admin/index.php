<!DOCTYPE html>
<?php

		//starting a session for our user login
		session_start();

		//database connection
	include("../include/db.php");
?>
<html>
	<head>
		<title> Admin Login</title>
	</head>
<style>
body{
	padding:0px;
	margin:0px;
	background:skyblue;
}
table{
color:white;
width:400px;
}

input{
	padding:5px;
}
</style>

<body>

	<form action = "index.php" method= "post">

		<table align="center" bgcolor="gray" width="500">
			<tr align="center">
				<td colspan="6">
					<h2>Admin Panel - Login</h2>
				</td>
			</tr>

			<tr>
				<td align="right"><strong>Email:</strong></td>
				<td>
					<input type = "text" name = "admin_email" placeholder = "Enter Admin Email" required="required"/>
				</td>
			</tr>

			<tr>
				<td align="right"><strong>Password:</strong></td>
				<td>
					<input type = "password" name = "admin_pass" placeholder = "Enter Admin Password" required="required"/>
				</td>
			</tr>

			<tr align = "center">
				<td colspan="6">
					<input type = "submit" name = "Admin" value = "Admin Login"/>
				</td>
			</tr>


		</table>

	</form>
<?php
	if(isset($_POST['Admin'])){

		$admin_email =mysqli_real_escape_string($con,$_POST['admin_email']);
		$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

		//verifying the user email and user password
		$sel = "select * from admin where admin_email='$admin_email' AND admin_pass='$admin_pass'";

		$run = mysqli_query($con, $sel);

		$check = mysqli_num_rows($run);

		if($check==0){
			echo "<script>alert('Password or Email is not correct, try again!')</script>";
			exit();
			}
			else{
				//create a session for this user first
				$_SESSION['admin_email']=$admin_email;

			//redirecting the person using javascript
			echo"<script>window.open('view_pins.php','_self')</script>";
		}
	}
?>



</body>

</html>
