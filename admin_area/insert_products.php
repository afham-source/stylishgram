<?php require_once('inc/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Insert Crystal</title>
	<link rel="stylesheet" href="css/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	
	<link href="css/responsive.css" rel="stylesheet">

	
</head>
<body>
	
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i>  Dashboard / Insert Crystal

			 </li>
		</ol>

	</div>
	
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Insert Crystal
				</h3>

				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						
						<div class="form-group">
							<label class="col-md-3 control-label">Crystal Name</label>
							<div class="col-md-6">
								<input type="text" name="product_title" class="form-control" required=>
							</div>
						</div>


						

						<div class="form-group">
							<label class="col-md-3 control-label">Crystal Image</label>
							<div class="col-md-6">
								<input type="file" name="product_image1" class="form-control" required=>
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-3 control-label">Base Image</label>
							<div class="col-md-6">
								<input type="file" name="product_image2" class="form-control" >
							</div>
						</div>

							
						<div class="form-group">
							<label class="col-md-3 control-label"></label>
							<div class="col-md-6">
								<input type="submit" name="submit" value="submit" class="btn btn-primary form-control" >
							</div>
						</div>


					</form>
					
				</div>
			</div>

		</div>

	</div>

</div>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>

</body>
</html>



<?php
if(isset($_POST['submit'])){

	$c_name = $_POST['product_title'];
	

	$c_img = $_FILES['product_image1']['name'];
	$b_img = $_FILES['product_image2']['name'];
	
	$temp_name1 = $_FILES['product_image1']['tmp_name'];
	$temp_name2 = $_FILES['product_image2']['tmp_name'];

	$view_crystal = "select * from design";
        
	$view_run_crystal = mysqli_query($con,$view_crystal);
	
	$count = mysqli_num_rows($view_run_crystal);
	
	if($count<6){

	move_uploaded_file($temp_name1, "../Images/$c_img");
	move_uploaded_file($temp_name2, "../Images/$b_img");

	$insert_product = "insert into design (c_name,c_img,b_img) values('$c_name','$c_img','$b_img')"; 

		$run_product = mysqli_query($con,$insert_product);
		if($run_product){

			echo "<script>alert('product has been inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_products','_self')</script>";
		}
		else {
			echo "<script>alert('product not inserted sucessfully')</script>";
			echo "<script>window.open('index.php?insert_products','_self')</script>";
		}
	}else{
            
		echo "<script>alert('You have already inserted 6 designs')</script>"; 
		 
	 }	
	}
	

?>