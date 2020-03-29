


<?php
session_start();
require_once('inc/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Admin Panel | Getz Technologies</title>
	<link rel="stylesheet" href="css/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

	
</head>

<body>

	<div class="container">
		<form action="" class="form-login" method="post">
			
			<h2 class="form-login-heading"> Admin Login </h2>
			<input type="text" name="admin_email" class="form-control" placeholder="Email Address" required="">
			<input type="password" name="admin_pass" class="form-control" placeholder="Password" required="">
			<button name="admin_login" class="btn btn-lg btn-primary btn-block"> Login </button>


		</form>

	</body>
	</html>

	<?php 

		if(isset($_POST['admin_login'])){

			$admin_email=mysqli_real_escape_string($con,$_POST['admin_email']);
			$admin_pass=mysqli_real_escape_string($con,$_POST['admin_pass']);
			$get_admin="select * from admins where admin_email='$admin_email' && admin_pass='$admin_pass'";
			$run_admin=mysqli_query($con,$get_admin);
			$count=mysqli_num_rows($run_admin);

		
			if($count==1){
				
				$_SESSION['admin_email']=$admin_email;

				echo"<script>alert('Logged In')</script>";
				echo"<script>window.open('index.php?dashboard','_self')</script>";


			}
				else {
				echo"<script>alert('Invalid email or password')</script>";

				}
		}



	?>